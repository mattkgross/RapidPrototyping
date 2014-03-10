from sqlalchemy import create_engine, ForeignKey
from sqlalchemy import Column, Date, Integer, String
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import relationship, backref
 
engine = create_engine('sqlite:///contact.db', echo=True)
Base = declarative_base()
 
########################################################################
class Contact(Base):
    """"""
    __tablename__ = "contact"
 
    id = Column(Integer, primary_key=True)
    f_name = Column(String)
    l_name = Column(String)
    email = Column(String)
    message = Column(String)
 
    #----------------------------------------------------------------------
    def __init__(self, f_name, l_name, email, message):
        """"""
        self.f_name = f_name
        self.l_name = l_name
        self.email = email
        self.message = message
 
# create tables
Base.metadata.create_all(engine)