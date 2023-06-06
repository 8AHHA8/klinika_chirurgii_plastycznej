package org.example;

import java.io.*;
import java.nio.file.Files;
import java.util.Random;
import java.util.zip.ZipEntry;
import java.util.zip.ZipInputStream;

public class Main {
    public static void main(String[] args) {
        String password = null;
        boolean passwordCracked = false;

        for(int i = 0; i < 25; i++) {
            password = generateRandomPassword();
            System.out.println(password);
            if (isPasswordValid(password)) {
                passwordCracked = true;
            }
        }

        if (passwordCracked) {
            System.out.println("Hasło zostało złamane: " + password);
        } else {
            System.out.println("Nie udało się złamać hasła w ciągu 15 minut.");
        }

        System.out.println(isPasswordValid("DUPA"));
    }

    public static String generateRandomPassword() {
        String characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+={[}]|:;'<,>.?/";
        StringBuilder password = new StringBuilder();
        Random random = new Random();

        int passwordLength = random.nextInt(25) + 6; // Losowa długość hasła od 6 do 15 znaków

        for (int i = 0; i < passwordLength; i++) {
            int index = random.nextInt(characters.length());
            password.append(characters.charAt(index));
        }

        return password.toString();
    }

    public static boolean isPasswordValid(String password) {
        try {
            Process process = Runtime.getRuntime()
                    .exec("C:/Program Files/WinRAR/winrar x C:\\Users\\Filip\\Downloads\\1.rar *.* C:\\Users\\Filip\\Desktop -p" + password);
            return !process.isAlive();
        } catch (Exception e) {
            e.printStackTrace();
            return false;
        }
    }
}