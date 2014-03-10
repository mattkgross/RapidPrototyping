from flask import Flask
from flask import request
from flask import render_template

import datetime
from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from setup import Contact

app = Flask(__name__)

@app.route('/contact')
def contact():
	return render_template('contact.html')

@app.route('/contact/request', methods=["POST"])
def contact_request():
	if request.method == "POST":
		engine = create_engine('sqlite:///contact.db', echo=True)
 
		# Create a Session
		Session = sessionmaker(bind=engine)
		session = Session()

		new_contact = Contact(request.json['f_name'],
					          request.json['l_name'],
					          request.json['email'],
					          request.json['message'])

		# Add the record to the session object
		session.add(new_contact)
		# commit the record the database
		session.commit()

		#return str(request.json)
		return "Success!"

app.debug = True
app.run()