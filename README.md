# Guestbook Web Application
## Setup
1. **ติดตั้ง dependencies**
composer install
2. **สร้างโปรเจกต์ Yii2**
composer create-project --prefer-dist yiisoft/yii2-app-basic guestbook
จะได้โครงสร้าง MVC พร้อมใช้งาน
3. **ทดสอบรันเซิร์ฟเวอร์ Yii2**
php yii serve 
ระบบจะแสดงผลตัวอย่าง:
Server started on http://localhost:8080/
4. **ตั้งค่าการเชื่อมต่อฐานข้อมูล**
ตั้งค่าการเชื่อมต่อฐานข้อมูล
เปิดไฟล์ config/db.php
ใส่ค่าการเชื่อมต่อกับฐานข้อมูล เช่น MySQL
5. **สร้างฐานข้อมูลใน phpMyAdmin**
เปิด phpMyAdmin
คลิก New → สร้างฐานข้อมูลชื่อ guestbook
เลือก Collation เป็น utf8_general_ci (เพื่อรองรับภาษาไทย)
กด Create
6. **สร้างไฟล์ Migration สำหรับตาราง Guestbook**
เปิดไฟล์ migration ที่ถูกสร้าง 
(เช่น m251020_110815_create_guestbook_table.php) และใส่ข้อมูล 
รัน migration: 
php yii migrate
ระบบจะถามยืนยัน Apply this migration? (yes/no) พิมพ์ yes แล้ว Enter
ถ้าเรียบร้อย จะเห็นข้อความว่า Migrated successfully
เปิด phpMyAdmin จะเห็นตาราง guestbook ถูกสร้างเรียบร้อย
ใน phpMyAdmin
ตาราง guestbook เก็บข้อมูลสมุดเยี่ยมจริง
ตาราง migration เก็บประวัติการรัน migration
7. **สร้างไฟล์ models**
models/Guestbook.php และใส่ข้อมูล
กำหนด rules(), attributeLabels(), และ tableName() เพื่อเชื่อมต่อฐานข้อมูล
8. **สร้างไฟล์ Controller**
controllers/GuestbookController.php และใส่ข้อมูล
จัดการ Action ต่าง ๆ เช่น actionIndex() สำหรับรับข้อมูลจากฟอร์มและแสดงผล
9. **สร้างไฟล์ View**
views/guestbook/index.php และใส่ข้อมูล
สร้างหน้าเว็บฟอร์มและส่วนแสดงข้อความทั้งหมดด้วย ActiveForm และ HTML
10. **การใช้งานโปรเจกต์**
รันเซิร์ฟเวอร์
php yii serve
เปิดเว็บเบราว์เซอร์
http://localhost:8080
เพิ่มพารามิเตอร์ route ต่อท้ายแบบนี้เพื่อเข้าไปที่หน้า index ของ guestbook:
http://localhost:8080/index.php?r=guestbook/index
11. **วิธี Git ตั้งแต่เริ่มต้น** 
**สร้าง repository ใหม่ในเครื่อง**
git init
**เพิ่มไฟล์ทั้งหมดเข้าสู่ staging**
git add .
**commit**
git commit -m "ข้อความบอกสิ่งที่ทำ"
**push ขึ้น GitHub**
git branch -M main
**เชื่อมต่อกับ GitHub**
git remote add origin https://github.com/siwakorn-posri/Guestbook.git
**กำหนด branch main เป็น branch เริ่มต้น**
git push -u origin main 
**หลังจากนี้ เมื่อแก้ไขไฟล์**
git add .
git commit -m "อัปเดต Guestbook view และ validation"
git push

