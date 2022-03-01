from django.db import models

# Creating a model for contact
class Contact(models.Model):
    name= models.CharField(max_length= 100)
    phone_number= models.CharField(max_length= 20)
    email = models.EmailField(max_length= 50)
    client_msg = models.TextField()
    created = models.DateField(auto_now_add= True)

    def __str__(self):
        return self.name

    def msg_preview(self):
        return self.client_msg[:50]

