from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def home(request):
    #return HttpResponse('<h1>Home</h1>')
    return render(request, 'base/home.html')

def posts(request):
    #return HttpResponse('<h1>Posts</h1>')
    return render(request, 'base/posts.html')

def profile(request):
    #return HttpResponse('<h1>Profiles</h1>')
    return render(request, 'base/profile.html')
