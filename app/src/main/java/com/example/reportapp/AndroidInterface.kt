package com.example.reportapp

// AndroidInterface.kt
import android.content.Context
import android.content.Intent
import android.net.Uri
import android.webkit.JavascriptInterface
import android.widget.Toast

class AndroidInterface(private val context: Context) {

    @JavascriptInterface
    fun shareToWhatsApp(message: String) {
        try {
            // Format nomor telepon untuk Uri
            val uri = "https://api.whatsapp.com/send?text=$message"

            // Buka WhatsApp menggunakan Intent
            val intent = Intent(Intent.ACTION_VIEW)
            intent.data = Uri.parse(uri)
            context.startActivity(intent)
        } catch (e: Exception) {
            // Handle jika WhatsApp tidak terinstal atau terjadi kesalahan lainnya
            Toast.makeText(context, "WhatsApp tidak terinstal atau terjadi kesalahan", Toast.LENGTH_SHORT).show()
            e.printStackTrace()
        }
    }
}
