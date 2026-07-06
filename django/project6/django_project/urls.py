from django.contrib import admin
from django.urls import path, include
from django.conf import settings             # <-- Pastikan ini ada
from django.conf.urls.static import static   # <-- Pastikan ini ada

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('blog.urls')),
]

# WAJIB ADA: Membuka jalur akses folder media di browser
if settings.DEBUG:
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)