CREATE DATABASE MYBESTCV;

USE MYBESTCV;

CREATE TABLE USERS (
  USER_ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  USERNAME VARCHAR(50) NOT NULL,
  PASSWORD VARCHAR(200) NOT NULL
);

CREATE TABLE APPLICANTS (
  APPLICANT_ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  USER_ID INT(11) NOT NULL,
  FULLNAME VARCHAR(100) NOT NULL,
  PROFESSIONAL_TITLE VARCHAR(100) NOT NULL,
  ADDRESS VARCHAR(200) NOT NULL,
  PHONE_NUMBER VARCHAR(20) NOT NULL,
  EMAIL VARCHAR(100) NOT NULL,
  SOCIAL_MEDIA VARCHAR(100) NOT NULL,
  PROFILE_PIC VARCHAR(50) NOT NULL,
  CREATED_DATE DATE NOT NULL,
  UPDATED_DATE DATE NOT NULL,
  INDEX ID_USER (USER_ID),
  CONSTRAINT FOREIGN KEY (USER_ID) REFERENCES USERS (USER_ID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE CERTIFICATE (
  CERTIFICATE_ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  USER_ID INT(11) NOT NULL,
  CERTIFICATE_NAME VARCHAR(100) NOT NULL,
  CERTIFYING_INSTITUTION VARCHAR(100) NOT NULL,
  CERTIFICATE_DATE DATE NOT NULL,
  INDEX USER_ID (USER_ID),
  CONSTRAINT FOREIGN KEY (USER_ID) REFERENCES USERS (USER_ID) ON DELETE CASCADE
);

CREATE TABLE EDUCATION (
  EDUCATION_ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  USER_ID INT(11) NOT NULL,
  DEGREE_LEVEL VARCHAR(100) NOT NULL,
  INSTITUTION_NAME VARCHAR(100) NOT NULL,
  START_DATE DATE NOT NULL,
  END_DATE DATE NOT NULL,
  INDEX USER_ID (USER_ID),
  CONSTRAINT FOREIGN KEY (USER_ID) REFERENCES USERS (USER_ID) ON DELETE CASCADE
);

CREATE TABLE EXPERIENCE (
  EXPERIENCE_ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  USER_ID INT(11) NOT NULL,
  COMPANY_NAME VARCHAR(100) NOT NULL,
  JOB_TITLE VARCHAR(100) NOT NULL,
  DESCRIPTION VARCHAR(200) NOT NULL,
  START_DATE DATE NOT NULL,
  END_DATE DATE NOT NULL,
  INDEX USER_ID (USER_ID),
  CONSTRAINT FOREIGN KEY (USER_ID) REFERENCES USERS (USER_ID) ON DELETE CASCADE
);

CREATE TABLE PROJECT (
  PROJECT_ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  USER_ID INT(11) NOT NULL,
  PROJECT_NAME VARCHAR(100) NOT NULL,
  DESCRIPTION TEXT NOT NULL,
  PROJECT_LINK VARCHAR(100) NOT NULL,
  INDEX USER_ID (USER_ID),
  CONSTRAINT FOREIGN KEY (USER_ID) REFERENCES USERS (USER_ID) ON DELETE CASCADE
);

CREATE TABLE REFERENCE (
  REFERENCE_ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  USER_ID INT(11) NOT NULL,
  REFERENCE_NAME VARCHAR(200) NOT NULL,
  INSTITUTION_NAME VARCHAR(200) NOT NULL,
  INSTITUTION_EMAIL VARCHAR(100) NOT NULL,
  PHONENUMBER VARCHAR(20) NOT NULL,
  INDEX USER_ID (USER_ID),
  CONSTRAINT FOREIGN KEY (USER_ID) REFERENCES USERS (USER_ID) ON DELETE CASCADE
);

CREATE TABLE SKILL (
  SKILL_ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  USER_ID INT(11) NOT NULL,
  SKILL_TYPE VARCHAR(100) NOT NULL,
  SKILL_NAME VARCHAR(100) NOT NULL,
  SKILL_LEVEL VARCHAR(50) NOT NULL,
  INDEX USER_ID (USER_ID),
  CONSTRAINT FOREIGN KEY (USER_ID) REFERENCES USERS (USER_ID) ON DELETE CASCADE
);

INSERT INTO USERS(
  USER_ID,
  USERNAME,
  PASSWORD
) VALUES(
  1000,
  "NguyenVanA",
  "20ca70c7c8f494c7bd1d54ad23d40cde"
),
(
  2000,
  "NguyenVanB",
  "23280a0ad9238d00c62b0272af265c57"
),
(
  3000,
  "TranVanC",
  "c8b8a6f5cb2dc818c19b2598ec27985f"
),
(
  4000,
  "PhamThiD",
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
  1101,
  1000,
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
  2101,
  2000,
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
  3101,
  3000,
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
  4101,
  4000,
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

INSERT INTO CERTIFICATE(
  CERTIFICATE_ID,
  USER_ID,
  CERTIFICATE_NAME,
  CERTIFYING_INSTITUTION,
  CERTIFICATE_DATE
) VALUES(
  1201,
  1000,
  "Microsoft 365 Certified: Administrator Expert",
  "Microsoft",
  "2023-11-01"
),
(
  2201,
  2000,
  "Microsoft Certified: Azure AI Engineer Associate",
  "Microsoft",
  "2020-12-03"
),
(
  3201,
  3000,
  "Microsoft Certified: Azure Administrator Associate",
  "Microsoft",
  "2022-05-30"
),
(
  4201,
  4000,
  "Microsoft Certified: Azure Data Engineer Associate",
  "Microsoft",
  "2021-03-03"
);

INSERT INTO SKILL(
  SKILL_ID,
  USER_ID,
  SKILL_TYPE,
  SKILL_NAME,
  SKILL_LEVEL
) VALUES(
  1301,
  1000,
  "Technical Skill",
  "Python Programming",
  "Intermediate"
),
(
  2301,
  2000,
  "Communication Skill",
  "Public Speaking",
  "Advanced"
),
(
  3301,
  3000,
  "Interpersonal Skill",
  "Teamwork",
  "Expert"
),
(
  4301,
  4000,
  "Analytical Skill",
  "Problem-solving",
  "Advanced"
);

INSERT INTO PROJECT(
  PROJECT_ID,
  USER_ID,
  PROJECT_NAME,
  DESCRIPTION,
  PROJECT_LINK
) VALUES(
  1401,
  1000,
  "Machine Learning Project",
  "Built a machine learning model to predict customer churn. The model was successfully deployed into production and reduced customer churn by 10%.",
  "https://github.com/example/machine-learning-project"
),
(
  2401,
  2000,
  "Website Development",
  "Developed a fully functional e-commerce website using HTML, CSS, and JavaScript. Implemented features such as user authentication, product management, and shopping cart functionality.",
  "https://github.com/example/website-development"
),
(
  3401,
  3000,
  "Mobile App Development",
  "Created a native mobile application for Android and iOS platforms using Flutter. The app provided users with a real-time news feed and personalized recommendations.",
  "https://github.com/example/mobile-app-development"
),
(
  4401,
  4000,
  "Data Analytics Project",
  "Conducted a data analysis project to identify trends and patterns in customer behavior. The findings were used to improve marketing campaigns and customer satisfaction.",
  "https://github.com/example/data-analytics-project"
);

INSERT INTO EXPERIENCE(
  EXPERIENCE_ID,
  USER_ID,
  COMPANY_NAME,
  JOB_TITLE,
  DESCRIPTION,
  START_DATE,
  END_DATE
) VALUES(
  1501,
  1000,
  "Google",
  "Software Engineer",
  "Developed and maintained web applications using Python and JavaScript.",
  "2019-06-01",
  "2023-12-01"
),
(
  2501,
  2000,
  "Amazon",
  "Data Scientist",
  "Analyzed customer data to identify trends and patterns.",
  "2020-01-01",
  "2022-12-31"
),
(
  3501,
  3000,
  "Microsoft",
  "Project Manager",
  "Managed software development projects from conception to launch.",
  "2018-01-01",
  "2021-12-31"
),
(
  4501,
  4000,
  "Apple",
  "UX Designer",
  "Designed user interfaces for mobile and web applications.",
  "	2017-01-01",
  "2019-05-31"
);

INSERT INTO EDUCATION(
  EDUCATION_ID,
  USER_ID,
  DEGREE_LEVEL,
  INSTITUTION_NAME,
  START_DATE,
  END_DATE
) VALUES(
  1601,
  1000,
  "Bachelor's",
  "XYZ University",
  "2019-06-01",
  "2023-12-01"
),
(
  2601,
  2000,
  "Master's",
  "ABC Business School",
  "2020-01-01",
  "2022-12-31"
),
(
  3601,
  3000,
  "Associate's",
  "Creative Arts College",
  "2018-01-01",
  "2021-12-31"
),
(
  4601,
  4000,
  "Doctorate",
  "Medical University of Cityville",
  "	2017-01-01",
  "2019-05-31"
);

INSERT INTO REFERENCE(
  REFERENCE_ID,
  USER_ID,
  REFERENCE_NAME,
  INSTITUTION_NAME,
  INSTITUTION_EMAIL,
  PHONENUMBER
) VALUES(
  1701,
  1000,
  "Dr. Amanda Johnson",
  "City General Hospital",
  "amanda.johnson@cityhospital.com",
  "+1 (555) 123-4567"
),
(
  2701,
  2000,
  "Professor Robert Martinez",
  "XYZ University",
  "robert.martinez@xyzuniversity.edu",
  "+1 (555) 987-6543"
),
(
  3701,
  3000,
  "Mary Thompson, M.Sc.",
  "ABC Research Institute",
  "mary.thompson@abcinstitute.org",
  "+1 (555) 234-5678"
),
(
  4701,
  4000,
  "John Davis, MBA",
  "XYZ Business Solutions",
  "john.davis@xyzbusiness.com",
  "+1 (555) 876-5432"
);