from django.contrib import admin
from django.contrib.auth.models import Group
from .models import Contact, Person, Services, About

# defining admin site header
admin.site.site_header= "Admin Dashboard"

# Registering models
admin.site.register(Contact)

admin.site.register(Person)

admin.site.register(About)

admin.site.register(Services)

# unregistering models
admin.site.unregister(Group)

