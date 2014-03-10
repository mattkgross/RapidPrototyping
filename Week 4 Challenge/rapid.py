import flask
from flask import request
from flask import render_template

app = flask.Flask(__name__)

@app.route('/')
def index():
	return "Hello Matthew Gross - Rapid Prototyping 2014!"

@app.route('/find', methods=['GET'])
def find():
	course = request.args.get('course')
	message = "Find the classroom for " + course + "... "
	if course == 'CSCI1300':
		return message + "ATLAS 100"
	if course == 'CSCI2240':
		return message + "ITTL 1B50"
	else:
		return message + "Sorry. No result for " + course + "."

@app.route('/notification')
def notification():
	return "Get Notification API Endpoint Stub"

@app.route('/hello')
@app.route('/hello/<name>')
def hello(name=None):
	return render_template('hello.html', name=name)

@app.route('/resume')
@app.route('/resume/<name>')
def resume(name=None):
	return render_template('resume.html', name=name)

app.debug = True
app.run()