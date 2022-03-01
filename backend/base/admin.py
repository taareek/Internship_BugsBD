from django.contrib import admin
from django.contrib.auth.models import Group
from .models import Contact

# defining admin site header
admin.site.site_header= "Admin Dashboard"

# Registering models
admin.site.register(Contact)

# unregistering models
admin.site.unregister(Group)

