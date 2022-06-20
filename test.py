import imp
from urllib import response
import requests
from bs4 import BeautifulSoup

url = 'https://movie.naver.com/movie/running/current.naver'
response = requests.get(url)
html = response.text
soup = BeautifulSoup(html, 'html.parser')

movie_list = soup.find_all('dt', class_='tit')

f = open('./movie.txt', 'w', encoding='utf-8')
for movie in movie_list:
    a_href = movie.find('a')['href']
    a_ctn = movie.find('a').text

    f.write(a_href)
    f.write(',')
    f.write(a_ctn)
    f.write('\n')
f.close()