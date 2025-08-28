# SQL Komutları - Örnek Veri Ekleme

Bu dosya, `birimler` ve `unvanlar` tablolarına örnek veriler eklemek için kullanılacak SQL komutlarını içerir.

## 📋 Birimler (Units) Tablosu - Örnek Veriler

### 1. İnsan Kaynakları Birimi
```sql
INSERT INTO birimler (birim_adı, konum, created_at, updated_at) 
VALUES ('İnsan Kaynakları', '1. Kat - 101', NOW(), NOW());
```

### 2. Bilgi İşlem Birimi
```sql
INSERT INTO birimler (birim_adı, konum, created_at, updated_at) 
VALUES ('Bilgi İşlem', '2. Kat - 205', NOW(), NOW());
```

### 3. Muhasebe Birimi
```sql
INSERT INTO birimler (birim_adı, konum, created_at, updated_at) 
VALUES ('Muhasebe', '1. Kat - 103', NOW(), NOW());
```

### 4. Satış ve Pazarlama Birimi
```sql
INSERT INTO birimler (birim_adı, konum, created_at, updated_at) 
VALUES ('Satış ve Pazarlama', '3. Kat - 301', NOW(), NOW());
```

### 5. Üretim Birimi
```sql
INSERT INTO birimler (birim_adı, konum, created_at, updated_at) 
VALUES ('Üretim', 'Zemin Kat - 001', NOW(), NOW());
```

## 🏷️ Ünvanlar (Titles) Tablosu - Örnek Veriler

### 1. Genel Müdür
```sql
INSERT INTO unvanlar (unvan_adı, created_at, updated_at) 
VALUES ('Genel Müdür', NOW(), NOW());
```

### 2. Müdür
```sql
INSERT INTO unvanlar (unvan_adı, created_at, updated_at) 
VALUES ('Müdür', NOW(), NOW());
```

### 3. Uzman
```sql
INSERT INTO unvanlar (unvan_adı, created_at, updated_at) 
VALUES ('Uzman', NOW(), NOW());
```

### 4. Teknisyen
```sql
INSERT INTO unvanlar (unvan_adı, created_at, updated_at) 
VALUES ('Teknisyen', NOW(), NOW());
```

### 5. Stajyer
```sql
INSERT INTO unvanlar (unvan_adı, created_at, updated_at) 
VALUES ('Stajyer', NOW(), NOW());
```

## 🔍 Veri Kontrol Komutları

### Tüm Birimleri Listele
```sql
SELECT * FROM birimler ORDER BY id;
```

### Tüm Ünvanları Listele
```sql
SELECT * FROM unvanlar ORDER BY id;
```

### Birim Sayısını Kontrol Et
```sql
SELECT COUNT(*) as birim_sayisi FROM birimler;
```

### Ünvan Sayısını Kontrol Et
```sql
SELECT COUNT(*) as unvan_sayisi FROM unvanlar;
```

## 🗑️ Veri Temizleme Komutları (Gerektiğinde)

### Tüm Birimleri Sil
```sql
DELETE FROM birimler;
```

### Tüm Ünvanları Sil
```sql
DELETE FROM unvanlar;
```

### Auto Increment'i Sıfırla
```sql
ALTER TABLE birimler AUTO_INCREMENT = 1;
ALTER TABLE unvanlar AUTO_INCREMENT = 1;
```

## 📝 Kullanım Notları

1. **MySQL/MariaDB** için yukarıdaki komutlar kullanılabilir
2. **SQLite** kullanıyorsanız `NOW()` yerine `datetime('now')` kullanın
3. **PostgreSQL** kullanıyorsanız `NOW()` yerine `CURRENT_TIMESTAMP` kullanın
4. Komutları tek tek çalıştırın
5. Veri eklemeden önce tabloların oluşturulduğundan emin olun

## 🚀 Hızlı Ekleme (Tüm Verileri Tek Seferde)

### Birimler için:
```sql
INSERT INTO birimler (birim_adı, konum, created_at, updated_at) VALUES 
('İnsan Kaynakları', '1. Kat - 101', NOW(), NOW()),
('Bilgi İşlem', '2. Kat - 205', NOW(), NOW()),
('Muhasebe', '1. Kat - 103', NOW(), NOW()),
('Satış ve Pazarlama', '3. Kat - 301', NOW(), NOW()),
('Üretim', 'Zemin Kat - 001', NOW(), NOW());
```

### Ünvanlar için:
```sql
INSERT INTO unvanlar (unvan_adı, created_at, updated_at) VALUES 
('Genel Müdür', NOW(), NOW()),
('Müdür', NOW(), NOW()),
('Uzman', NOW(), NOW()),
('Teknisyen', NOW(), NOW()),
('Stajyer', NOW(), NOW());
```
