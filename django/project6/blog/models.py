import math
from django.db import models
from django.urls import reverse

class Post(models.Model):
    title = models.CharField(max_length=200)
    author = models.ForeignKey("auth.User", on_delete=models.CASCADE)
    body = models.TextField()
    # INOVASI: Field Foto Sampul Artikel
    cover_image = models.ImageField(upload_to='blog_covers/', blank=True, null=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.title

    @property
    def read_time(self):
        word_count = len(self.body.split())
        return math.ceil(word_count / 200)

    def get_absolute_url(self):
        return reverse("post_detail", kwargs={"pk": self.pk})