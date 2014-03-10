import flask
from flask import request
from flask import render_template
import twitter
import json

app = flask.Flask(__name__)

@app.route('/')
def index():
	return render_template('index.html')

@app.route('/search')
def search():
	# Gets the search type (location, subject, etc.) and the keyword
	api = twitter.Api(consumer_key='DdU16WP4VM7P9PHOUJ57g', consumer_secret='s3MRayg34QV82RXOsG3VZquXY0JY7k0osL5SfKZ2o', access_token_key='419788290-Lq3CrrkXbRhv6Sdn06KDCQRueErUpXCF8dFZY2wo', access_token_secret='wcmsAk7CUrJHifaTcZiAVsN4tCC4rmV8h59rw2ZUeO3S6', cache=None)
	statuses = api.GetStreamSample()
	#data = [
	#{
	#	"user" : {"name" : "Breezy"},
	#	"text" : "wait till i get some where .. all my pas coaches are going to look so dumb #OnMyGrind",
	#	"id_str" : 435599139938639873
	#},
	#{
	#	"user" : {"name" : "nudLyfe2015"},
	#	"text" : "Got a job #OnMyGrind",
	#	"id_str" : 435590638109601792
	#},
#{
#	#	"user" : {"name" : "yolkedbro"},
#	#	"text" : "Benched 400 lbs #OnMyGrind",
#	#	"id_str" : 435590638109601992
#	#},
#{#
#	#	"user" : {"name" : "masterLuke"},
#	#	"text" : "hustling #OnMyGrind",
#	#	"id_str" : 435590638109601992
#	#},
#{#
#	#	"user" : {"name" : "Rex"},
#	#	"text" : "studying for midterms #OnMyGrind",
#	#	"id_str" : 435590638109601992
#	#},
#{#
#	#	"user" : {"name" : "O.d."},
#	#	"text" : "<3  money #OnMyGrind",
#	#	"id_str" : 435590638109601992
#	#},
#{#
#	#	"user" : {"name" : "Chel."},
#	#	"text" : "i rap about money but i aint got no money #OnMyGrind",
#	#	"id_str" : 435590638109601992
#	#},
#{#
#	#	"user" : {"name" : "John koski."},
#	#	"text" : "feeling amazzzinggg #OnMyGrind",
#	#	"id_str" : 435590638109601992
#	#},
#
#{#
#	#	"user" : {"name" : "DSK."},
#	#	"text" : "ima make a name for myself soon #OnMyGrind",
#	#	"id_str" : 435590638109601992
#	#},
#{#
#	#	"user" : {"name" : "Lucy."},
#	#	"text" : "heading to a film festival #OnMyGrind",
#	#	"id_str" : 435590638109601992
#	#},
	#]

	data = [
	{
			"user" : {"name" : "OfficialJeffC"},
			"text" : "What is \"hair\" #GhettoJeopardy",
			"id_str" : 435590638109601792
	},
		
	{
			"user" : {"name" : "TheJeopardyShow"},
			"text" : "What is surviving a scary movie #GhettoJeopardy",
			"id_str" : 435590638109601792
	},

	{
			"user" : {"name" : "RealJeremyJ"},
			"text" : "What is Reading out loud #GhettoJeopardy",
			"id_str" : 435590638109601792
	},

	{
			"user" : {"name" : "TheJeopardyShow"},
			"text" : "What is Let me borrow #GhettoJeopardy",
			"id_str" : 435590638109601792
	},

	{
			"user" : {"name" : "GhettoTrebek"},
			"text" : "Category: Celebrities that white people mistake for Tupac #GhettoJeopardy",
			"id_str" : 435590638109601792
	},

	{
			"user" : {"name" : "dvdx_"},
			"text" : "What is \"I'm on my way\" #GhettoJeopardy",
			"id_str" : 435590638109601792
	},

	{
			"user" : {"name" : "TheRawestMike"},
			"text" : "What is never #GhettoJeopardy",
			"id_str" : 435590638109601792
	},

	{
			"user" : {"name" : "TheJeopardyShow"},
			"text" : "What is, \"If you can't handle me at my worst, you don't deserve me at my best\"? #GhettoJeopardy",
			"id_str" : 435590638109601792
	},

	{
			"user" : {"name" : "AyeeCurt_"},
			"text" : "What Is A Plastic Bag Filled With More Plastic Bags #GhettoJeopardy",
			"id_str" : 435590638109601792
	},

	{
			"user" : {"name" : "GhettoTrebek"},
			"text" : "For $400 #GhettoJeopardy",
			"id_str" : 435590638109601792
	}
	]

	n = request.args.get('n', -1)
	query = request.args.get('query', None)
#
#	#if n > 0 and query != None:
#	#	count = 0
#	#	for obj in statuses:
#	#		if 'text' in obj and 'entities' in obj and 'lang' in obj:
#	#			if obj['text'] != None and obj['entities']['hashtags'] != None and obj['lang'] != None:
#	#				if query in obj['entities']['hashtags']:
#	#					data.append(obj)
#	#					count = count + 1
#	#					if count >= n:
#	#						break
	#					continue

	#else:
	if n < 0 and query == None:
		data = None
		n = -1

	return render_template('search.html', n=n, query=query, data=data)

@app.route('/view/<int:id>')
def view(id):
	# Gets the search type (location, subject, etc.) and the keyword
	api = twitter.Api(consumer_key='DdU16WP4VM7P9PHOUJ57g', consumer_secret='s3MRayg34QV82RXOsG3VZquXY0JY7k0osL5SfKZ2o', access_token_key='419788290-Lq3CrrkXbRhv6Sdn06KDCQRueErUpXCF8dFZY2wo', access_token_secret='wcmsAk7CUrJHifaTcZiAVsN4tCC4rmV8h59rw2ZUeO3S6', cache=None)
	data = api.GetStatus(id)
	return render_template('results.html', data=data)

@app.route('/custom')
def custom():
	# Gets the search type (location, subject, etc.) and the keyword
	api = twitter.Api(consumer_key='DdU16WP4VM7P9PHOUJ57g', consumer_secret='s3MRayg34QV82RXOsG3VZquXY0JY7k0osL5SfKZ2o', access_token_key='419788290-Lq3CrrkXbRhv6Sdn06KDCQRueErUpXCF8dFZY2wo', access_token_secret='wcmsAk7CUrJHifaTcZiAVsN4tCC4rmV8h59rw2ZUeO3S6', cache=None)
	statuses = api.GetStreamSample()
	data = []

	count = 0
	for obj in statuses:
		if 'text' in obj and 'created_at' in obj and 'lang' in obj:
			if obj['text'] != None and obj['created_at'] != None and obj['lang'] == 'en':
				data.append(obj)
				count = count + 1
				if count >= 10:
					break
				continue

	return render_template('custom.html', data=data)

app.debug = True
app.run()