from django.contrib import admin
from .models import Post


@admin.register(Post)
class PostAdmin(admin.ModelAdmin):
    list_display = ("title", "author", "read_time_display", "body_preview")

    def read_time_display(self, obj):
        return f"{obj.read_time} menit"

    read_time_display.short_description = "Estimasi Baca"

    def body_preview(self, obj):
        if len(obj.body) > 50:
            return obj.body[:50] + "..."
        return obj.body

    body_preview.short_description = "Cuplikan Isi"
    # INOVASI: Menyuntikkan CSS Kustom ke Halaman Admin
    class Media:
        css = {
            'all': ('css/admin_dark.css',) # Kita akan buat file ini
        }