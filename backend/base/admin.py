from django.contrib import admin
from import_export.admin import ImportExportModelAdmin
from django.contrib.auth.models import Group
from .models import Contact, Person, Services, About, WorkExperience, AudioBox

# defining admin site header
admin.site.site_header= "Admin Dashboard"

# Registering our models (tables)

#admin.site.register(Contact)
@admin.register(Contact)
class ContactData(ImportExportModelAdmin):
    list_display = ("name", "email", "client_msg", "created")
    pass
admin.register(Contact)

#admin.site.register(Person)
@admin.register(Person)
class PersonData(ImportExportModelAdmin):
    list_display = ("name", "age", "email")
    pass
admin.register(Person)

#admin.site.register(About)
@admin.register(About)
class AboutData(ImportExportModelAdmin):
    list_display = ("name", "designation", "description")
    pass
admin.register(About)

#admin.site.register(Services)
@admin.register(Services)
class ServicesData(ImportExportModelAdmin):
    list_display = ("service_name", "description", "image_file")
    pass
admin.register(Services)

@admin.register(WorkExperience)
class ExperienceData(ImportExportModelAdmin):
    list_display = ("timeline", "position", "organization_name", "description")
    pass
admin.register(WorkExperience)

@admin.register(AudioBox)
class AudioBoxData(ImportExportModelAdmin):
    list_display = ("title", "file")
    pass
admin.register(AudioBox)

## unregistering models
admin.site.unregister(Group)

