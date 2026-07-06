from django.urls import path
from .views import BlogListView, BlogDetailView, BlogCreateView # Tambahkan BlogCreateView di sini

urlpatterns = [
    path("", BlogListView.as_view(), name="home"),
    path("post/<int:pk>/", BlogDetailView.as_view(), name="post_detail"),
    path("post/new/", BlogCreateView.as_view(), name="post_new"), # Tambahkan jalur ini jika ingin dipakai
]