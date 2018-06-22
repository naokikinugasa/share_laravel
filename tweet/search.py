import json, config, requests
from requests_oauthlib import OAuth1Session

CK = config.CONSUMER_KEY
CS = config.CONSUMER_SECRET
AT = config.ACCESS_TOKEN
ATS = config.ACCESS_TOKEN_SECRET
twitter = OAuth1Session(CK, CS, AT, ATS)


def get_friends_id(twitter):
    url = "https://api.twitter.com/1.1/friends/ids.json?user_id=985819804484292608"

    req = twitter.get(url)

    if req.status_code == 200:
        search_timeline = json.loads(req.text)
        return search_timeline['ids']
    else:
        print("ERROR: %d" % req.status_code)

friends_list = get_friends_id(twitter)


base_url = "https://api.twitter.com/1.1/search/tweets.json?since_id=1009727853733134339"

params ={'q' : 'ミキサー', 'count' : 100}
links = []
tweet_id = []
for i in range(0,1):
    print(i)

    if i == 0:
        url = base_url + ""
    print(url)
    req = twitter.get(url, params = params)
    if req.status_code == 200:
        search_timeline = json.loads(req.text)
        print('len(search_timeline[statuses]): ' + str(len(search_timeline['statuses'])))

        # if "next_results" not in search_timeline["search_metadata"]:
        #     break

        for tweet in search_timeline['statuses']:
            if tweet['user']['id'] in friends_list:
                print(tweet['created_at'])
                link = "https://twitter.com/" + tweet['user']['screen_name'] + "/status/" + tweet['id_str']
                print(link)
                requests.post('https://hooks.slack.com/services/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', data = json.dumps({
                    'text': link
                }))
                links.append(link)
                tweet_id.append(tweet['id'])

        # next_results = search_timeline["search_metadata"]['next_results']
        # url = base_url + next_results 
    else:
        print("ERROR: %d" % req.status_code)
print("len(links): " + str(len(links)))
# oldest_id = tweet_id[len(links) - 1]
# if req.status_code == 200:
#     search_timeline = json.loads(req.text)
#     friends_list = get_friends_id(twitter)
#     print(len(search_timeline['statuses']))
#     for tweet in search_timeline['statuses']:
#         print(tweet['text'])
#         print('--------------------')
#         if tweet['user']['id'] in friends_list:
#             link = "https://twitter.com/" + tweet['user']['screen_name'] + "/status/" + tweet['id_str']
#             print(link)
# else:
#     print("ERROR: %d" % req.status_code)
