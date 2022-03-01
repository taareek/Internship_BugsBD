from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def home(request):
    #return HttpResponse('<h1>Home</h1>')
    #return render(request, 'base/home.html')
    return render(request, 'base/index.html')

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
    context = {'posts' : posts}
    #return HttpResponse('<h1>Posts</h1>')
    return render(request, 'base/posts.html', context)

def profile(request):
    #return HttpResponse('<h1>Profiles</h1>')
    return render(request, 'base/profile.html')
