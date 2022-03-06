from django.shortcuts import render
from django.http import HttpResponse
from .models import Person, About, Services, WorkExperience, Contact
import datetime
# Create your views here.

def home(request):
    #return HttpResponse('<h1>Home</h1>')
    #return render(request, 'base/home.html')

    about_data = About.objects.all()
    services_data = Services.objects.all()
    work_experience_data = WorkExperience.objects.all()

    context = {
        'about': about_data, 
        'service': services_data, 
        'experience': work_experience_data
    }
    # getting data from contact form and insert into database
    if request.method == 'POST':
        name = request.POST.get('name')
        number = request.POST.get('phone_number')
        email = request.POST.get('email')
        client_msg = request.POST.get('client_msg')
        created = datetime.datetime.now()

        contact_info = Contact(name= name, phone_number= number, email= email, client_msg= client_msg, created= created)
        contact_info.save()

    return render(request, 'base/index.html', context)

def contact(request):
    if request.method == 'POST':
        name = request.POST.get('name')
        number = request.POST.get('phone_number')
        email = request.POST.get('email')
        client_msg = request.POST.get('client_msg')
        created = datetime.datetime.now()

        contact_info = Contact(name= name, phone_number= number, email= email, client_msg= client_msg, created= created)
        contact_info.save()
    print('Your information submitted.')
    return render(request, 'base/contact.html')

def posts(request):
    posts = [
        {
            'headline': 'Library Management system',
            'sub_headline': 'Deisgned built in model',
        },
        {
            'headline': 'Online tuition',
            'sub_headline': 'Students will be encouraged',
        },
        {
            'headline': 'E-commerce',
            'sub_headline': 'One of the trending',
        },
    ]
    work_experience_data = WorkExperience.objects.all()
    context = {'posts' : posts, 'experience':work_experience_data}
    #return HttpResponse('<h1>Posts</h1>')
    return render(request, 'base/posts.html', context)

def profile(request):
    #return HttpResponse('<h1>Profiles</h1>')
    person_data = Person.objects.all()

    posts = [
        {
            'headline': 'Library Management system',
            'sub_headline': 'Deisgned built in model',
        },
        {
            'headline': 'Online tuition',
            'sub_headline': 'Students will be encouraged',
        },
        {
            'headline': 'E-commerce',
            'sub_headline': 'One of the trending',
        },
    ]

    context_p = {
        'person': person_data, 'posts': posts
    }

    return render(request, 'base/profile.html', context_p)

    
