#from typing_extensions import self
from distutils.command.upload import upload
from django.db import models
from sqlalchemy import false

# Creating a model for contact
class Contact(models.Model):
    name= models.CharField(max_length= 100)
    phone_number= models.CharField(max_length= 20)
    email = models.EmailField(max_length= 50)
    client_msg = models.TextField(null= True, blank= True)
    created = models.DateField(auto_now_add= True)

    def __str__(self):
        return self.name

    def msg_preview(self):
        return self.client_msg[:50]


class Person(models.Model):
    name = models.CharField(max_length= 50)
    age = models.IntegerField()
    email = models.EmailField(max_length= 50)

    def __str__(self):
        return self.name
    
class About(models.Model):
    name = models.CharField(max_length= 50)
    designation = models.CharField(max_length= 100)
    description = models.TextField()

    def __str__(self):
        return self.name

class Services(models.Model):
    service_name = models.CharField(max_length= 100)
    description = models.TextField()
    image_file = models.ImageField(upload_to= 'about/', blank= false)

    def __str__(self):
        return self.service_name

class WorkExperience(models.Model):
    timeline = models.CharField(max_length= 20)
    position = models.CharField(max_length= 50)
    organization_name = models.CharField(max_length= 100)
    description = models.TextField()

    def __str__(self):
        return self.position

