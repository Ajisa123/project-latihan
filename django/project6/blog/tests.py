import math
from django.contrib.auth import get_user_model
from django.test import TestCase
from django.urls import reverse
from .models import Post


class BlogTests(TestCase):

    @classmethod
    def setUpTestData(cls):
        # Membuat pengguna sampel
        cls.user = get_user_model().objects.create_user(
            username="testuser", email="test@email.com", password="secret"
        )
        # Membuat post sampel berisi 300 kata (300 / 200 = 1.5 -> dibulatkan jadi 2 menit)
        long_body = "Kata " * 300
        cls.post = Post.objects.create(
            title="Judul Uji",
            body=long_body,
            author=cls.user,
        )

    def test_post_model_and_read_time(self):
        self.assertEqual(self.post.title, "Judul Uji")
        self.assertEqual(str(self.post), "Judul Uji")
        self.assertEqual(self.post.get_absolute_url(), "/post/1/")
        self.assertEqual(self.post.read_time, 2)

    def test_url_locations(self):
        response_list = self.client.get("/")
        self.assertEqual(response_list.status_code, 200)

        response_detail = self.client.get("/post/1/")
        self.assertEqual(response_detail.status_code, 200)

    def test_views_and_templates(self):
        # Menguji halaman utama (List View)
        response_list = self.client.get(reverse("home"))
        self.assertEqual(response_list.status_code, 200)
        self.assertTemplateUsed(response_list, "home.html")

        # Menguji halaman detail (Detail View)
        response_detail = self.client.get(
            reverse("post_detail", kwargs={"pk": self.post.pk})
        )
        self.assertEqual(response_detail.status_code, 200)
        self.assertTemplateUsed(response_detail, "post_detail.html")
        self.assertContains(response_detail, "Judul Uji")
        self.assertContains(response_detail, "Estimasi Baca: 2 menit")

    def test_post_detail_404(self):
        response = self.client.get("/post/999/")
        self.assertEqual(response.status_code, 404)