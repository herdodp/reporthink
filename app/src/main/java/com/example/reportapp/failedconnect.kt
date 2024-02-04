package com.example.reportapp

import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import com.google.android.material.bottomnavigation.BottomNavigationView

@Suppress("DEPRECATION")
class failedconnect : AppCompatActivity() {

    private lateinit var tryagain1 : Button
    private lateinit var exit1 : Button


    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_failedconnect)



        tryagain1 = findViewById(R.id.tryagain)
        exit1 = findViewById(R.id.keluar)

        tryagain1.setOnClickListener {
            startActivity(Intent(this, MainActivity::class.java))
            finish()
        }

        exit1.setOnClickListener {
            finishAffinity()
        }


    }
}