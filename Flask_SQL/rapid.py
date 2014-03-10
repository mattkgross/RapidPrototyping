import flask
from flask import request
from flask import render_template

app = flask.Flask(__name__)

@app.route('/home')
def home():
	navigation = [
		{
			"href" : "http://www.mattkgross.com",
			"caption" : "Personal Website"
		},
		{
			"href" : "http://www.microsoft.com",
			"caption" : "Microsoft"
		},
		{
			"href" : "http://csel.cs.colorado.edu/~mabu8310",
			"caption" : "Bub's Website"
		}		
	]
	a_variable = "Welcome to the nud lyf."
	return render_template('home.html', navigation=navigation, a_variable=a_variable)

app.debug = True
app.run()