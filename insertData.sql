INSERT INTO USERS(
    USER_ID,
    USERNAME,
    PASSWORD
) VALUES(
    1,
    "Nguyen Van A",
    "20ca70c7c8f494c7bd1d54ad23d40cde"
),
(
    2,
    "Nguyen Van B",
    "23280a0ad9238d00c62b0272af265c57"
),
(
    3,
    "Tran Van C",
    "c8b8a6f5cb2dc818c19b2598ec27985f"
),
(
    4,
    "Pham Thi D",
    "90b5395c0f3736a1147279220c220829"
);

INSERT INTO APPLICANTS(
    APPLICANT_ID,
    USER_ID,
    FULLNAME,
    PROFESSIONAL_TITLE,
    ADDRESS,
    PHONE_NUMBER,
    EMAIL,
    SOCIAL_MEDIA,
    PROFILE_PIC,
    CREATED_DATE,
    UPDATED_DATE
) VALUES(
    1001,
    1,
    "Nguyen Van Anh",
    "Mr",
    "123 Ly Thuong Kiet, P11, Q10, TP.HCM",
    0987654321,
    "anh.nguyenvan@hcmut.edu.vn",
    "https://www.facebook.com/nguyenvananh",
    "https://scontent.fhan3-5.fna.fbcdn.net/",
    "2023-11-20",
    "2023-11-29"
),
(
    2001,
    2,
    "Nguyen Van Binh",
    "Ms",
    "456 Ly Thuong Kiet, P11, Q10, TP.HCM",
    0123456789,
    "binh.nguyenvan@hcmut.edu.vn",
    "https://www.facebook.com/nguyenvananh",
    "https://scontent.fhan3-5.fna.fbcdn.net/",
    "2023-11-20",
    "2023-11-29"
),
(
    3001,
    3,
    "Tran Van Cuong",
    "Mrs",
    "789 Ly Thuong Kiet, P11, Q10, TP.HCM",
    05647382910,
    "cuong.tranvan@hcmut.edu.vn",
    "https://www.facebook.com/nguyenvananh",
    "https://scontent.fhan3-5.fna.fbcdn.net/",
    "2023-11-20",
    "2023-11-29"
),
(
    4001,
    4,
    "Pham Thi Duong",
    "Dr",
    "100 Ly Thuong Kiet, P11, Q10, TP.HCM",
    0912837465,
    "duong.phamthi@hcmut.edu.vn",
    "https://www.facebook.com/nguyenvananh",
    "https://scontent.fhan3-5.fna.fbcdn.net/",
    "2023-11-20",
    "2023-11-29"
);