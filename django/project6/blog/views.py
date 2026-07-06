from django.views.generic import ListView, DetailView, CreateView
from django.urls import reverse_lazy
from .models import Post

class BlogListView(ListView):
    model = Post
    template_name = "home.html"
    context_object_name = "posts"

class BlogDetailView(DetailView):
    model = Post
    template_name = "post_detail.html"
    context_object_name = "post"

# PASTIKAN KELAS INI ADA UNTUK MENANGANI UPLOAD
class BlogCreateView(CreateView):
    model = Post
    fields = ["title", "author", "body", "cover_image"] # Kuncinya ada di 'cover_image'
    success_url = reverse_lazy("home")