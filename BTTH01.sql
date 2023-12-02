CREATE DATABASE BTTH01_CSE485;

USE BTTH01_CSE485;

CREATE TABLE tacgia
(
	ma_tgia INT UNSIGNED NOT NULL PRIMARY KEY ,
    ten_tgia VARCHAR(100) NOT NULL,
    hinh_tgia VARCHAR(100) 
);
CREATE TABLE theloai
(
	ma_tloai INT UNSIGNED NOT NULL PRIMARY KEY ,
    ten_tloai VARCHAR(50) NOT NULL
);
CREATE TABLE baiviet
(
	ma_bviet INT UNSIGNED NOT NULL PRIMARY KEY,
    tieude VARCHAR(200) NOT NULL,
    ten_bhat VARCHAR(100) NOT NULL,
    ma_tloai INT UNSIGNED NOT NULL ,
    tomtat TEXT NOT NULL,
    noidung TEXT ,
    ma_tgia INT UNSIGNED NOT NULL,
    ngayviet DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    hinhanh VARCHAR(200),
    FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai),
    FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia)
);



INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (1, "Nhacvietplus");
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (2, "Sưu tầm");
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (3, "Sandy");
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (4, "Lê Trung Ngân");
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (5, "Khánh Ngọc");
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (6, "Night Stalker");
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (7, "Phạm Phương Anh");
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (8, "Tâm tình");


INSERT INTO theloai VALUES (1, "Nhạc trẻ");
INSERT INTO theloai VALUES (2, "Nhạc trữ tình");
INSERT INTO theloai VALUES (3, "Nhạc cách mạng");
INSERT INTO theloai VALUES (4, "Nhạc thiếu nhi");
INSERT INTO theloai VALUES (5, "Nhạc quê hương");
INSERT INTO theloai VALUES (6, "POP");
INSERT INTO theloai VALUES (7, "Rock");
INSERT INTO theloai VALUES (8, "R&B");

select * from baiviet;
INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	1, 
	"Lòng mẹ", 
    "Lòng mẹ", 
    2,
	"Và mẹ ơi đừng khóc nhé! Cả đời này mẹ đã khóc nhiều lắm rồi, hãy cười lên vì con đã trưởng thành! Con sẽ lại về dậy sớm nấu cơm cho mẹ, nấu nước cho mẹ tắm như ngày xưa. \“Dù cho vai nắng nhưng lòng thương chẳng nhạt màu, vẫn mơ quay về vui vầy dưới bóng mẹ yêu\”", 	
	1
);

INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	2, 
	"Cảm ơn em đã rời xa anh", 
    "Vết mưa", 
    2,
	"Cảm ơn em đã cho anh những tháng ngày hạnh phúc, cho anh biết yêu và được yêu. Em cho anh được nếm trải hương vị ngọt ngào của tình yêu nhưng cũng đầy đau khổ và nước mắt. Những tháng ngày đó có lẽ suốt cuộc đời anh không bao giờ quên", 	
	3
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	3,
	"Cuộc đời có mấy ngày mai?", 
    "Phôi pha", 
    2, 
	"Đêm nay, trời quang mây tạnh, trong người nghe hoang vắng và tôi ngồi đây \“Ôm lòng đêm, Nhìn vầng trăng mới về\” mà ngậm ngùi \“Nhớ chân giang hồ. Ôi phù du, từng tuổi xuân đã già\”", 
	4
);

INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	4, 
	"Quê tôi!", 
    "Quê hương", 
    5,
	"Quê hương là gì mà chở đầy kí ức nhỏ xinh. Có đám trẻ nô đùa bên nhau dưới gốc ổi nhà bà Năm giữa trưa nắng gắt chỉ để chờ bà đi vắng là hái trộm. Có hai anh em tôi bì bõm lội sình bắt cua đem về nhà cho mẹ nấu canh, nấu cháo… Có ba chị em tôi lục đục tự nấu ăn khi mẹ vắng nhà. Có anh tôi luôn dắt tôi đi cùng đường ngõ xóm chỉ để em được vui. Có cả những trận cãi nhau nảy lửa của ba anh em nữa…",
	5
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	5, 
	"Đất nước", 
    "Đất nước", 
    5,
	"Đã bao nhiêu lần tôi tự hỏi: liệu trên Thế giới này có nơi nào chiến tranh tang thương mà lại rất đổi anh hùng như nước mình không? Liệu có mảnh đất nào mà mỗi tấc đất hôm nay đã thấm máu xương của những thế hệ đi trước nhiều như nước mình không? Và, liệu có một đất nước nào lại có nhiều bà mẹ đau khổ nhưng cũng hết sức gan góc như đất nước mình không?",
	1
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	6, 
	"Hard Rock Hallelujah", 
    "Hard Rock Hallelujah", 
    7,
	"Những linh hồn đang lạc lối, mù quáng mất phương hướng trong cõi trần gian đầy nghiệt ngã hãy nên lắng nghe \"Hard Rock Hallelujah\" để có thể quên tất cả mọi thứ để tìm về đúng bản chất sâu thẳm nhất trong tâm hồn chính mình!",
	6
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	7, 
	"The Unforgiven", 
    "The Unforgiven", 
    7,
	"Lâu lắm rồi mới nghe lại The Unforgiven II, vì bài này không phải là bài mà tôi thích. Anh bạn tôi lúc trước, đi đâu cũng nghêu ngao bài này ấy, chỉ tại vì hắn đang... thất tình mà lị. Mà sao Metallica có The Unforgiven rồi lại có thêm bài này chi nữa vậy không biết nữa, làm cho tôi cảm thấy hình như hơi bị đúng so với tâm trạng của tôi lúc này.",
	1
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	8, 
	"Nơi tình yêu bắt đầu", 
    "Nơi tình yêu bắt đầu", 
    1,
	"Nhiều người sẽ nghĩ làm gì có yêu nhất và làm gì có yêu mãi. Ừ! Chẳng có gì là mãi mãi cả, vì chúng ta không trường tồn vĩnh cửu",
	1
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	9, 
	"Love Me Like There’s No Tomorrow", 
    "Love Me Like There’s No Tomorrow", 
    8,
	"Nếu ai đã từng yêu Queen, yêu cái chất giọng cao, sắc sảo như một vết cắt thật ngọt ẩn giấu bao cảm xúc mãnh liệt của Freddie chắc không thể không \"điêu đứng\" mỗi khi nghe Love Me Like There’s No Tomorrow.",
	1
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	10, 
	"I\'m stronger", 
	"I\'m stronger", 
	7,
	"Em không phải là người giỏi giấu cảm xúc, nhưng em lại là người giỏi đoán biết cảm xúc của người khác vậy nên đừng cố nói nhớ em, rằng mọi thứ chỉ là do hoàn cảnh. Và cũng đừng dối em rằng anh đã từng yêu em. Em nhắm mắt cũng cảm nhận được mà, thật đấy",
	2
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	11, 
	"Ôi Cuộc Sống Mến Thương", 
    "Ôi Cuộc Sống Mến Thương", 
    5,
	"Có một câu nói như thế này \"Âm nhạc là một cái gì khác lạ mà hầu như tôi muốn nói nó là một phép thần diệu.Vì nó đứng giữa tư tưởng và hiện tượng, tinh thần và vật chất, mọi thứ trung gian mơ hồ thế đó mà không là thế đó giữa các sự vật mà âm nhạc hòa giải\"",
	2
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	12, 
	"Cây và gió", 
    "Cây và gió", 
    7,
	"Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát “Cây và gió” đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.",
	7
);


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, ma_tgia)
VALUES (
	13,
	"Như một cách tạ ơn đời", 
    "Người thầy", 
    2,
	"Ánh nắng cuối ngày rồi cũng sẽ tắt, dòng sông con đò rồi cũng sẽ rẽ sang một hướng khác. Nhưng việc trồng người luôn cảm thụ với chuyến đò ngang, cứ tần tảo đưa rồi lặng lẽ quay về đưa sang. Con đò năm xưa của Thầy nặng trĩu yêu thương, hy sinh thầm lặng.",
	8
);

select * from theloai join baiviet on theloai.ma_tloai = baiviet.ma_tloai
where theloai.ten_tloai = 'Nhạc trữ tình';

select * from baiviet join tacgia on tacgia.ma_tgia = baiviet.ma_tgia
where tacgia.ten_tgia = 'Nhacvietplus';

select * from theloai 
where ma_tloai not in (select ma_tloai from baiviet);

select baiviet.ma_bviet , baiviet.tieude , baiviet.ten_bhat , tacgia.ten_tgia , theloai.ten_tloai , baiviet.ngayviet from baiviet join tacgia on baiviet.ma_tgia = tacgia.ma_tgia join theloai on theloai.ma_tloai = baiviet.ma_tloai;

select theloai.ten_tloai , count(baiviet.ma_tloai) from baiviet join theloai 
on baiviet.ma_tloai = theloai.ma_tloai
group by theloai.ten_tloai
having count(baiviet.ma_tloai) >= all(select  count(ma_bviet) from baiviet group by ma_tloai);

select tacgia.ten_tgia , count(baiviet.ma_tgia) from tacgia join baiviet 
on tacgia.ma_tgia = baiviet.ma_tgia
group by tacgia.ten_tgia
order by count(baiviet.ma_tgia) desc
limit 2;

select * from baiviet where ten_bhat like '%yêu%' or ten_bhat like '%thương%' or ten_bhat like '%anh%' or ten_bhat like '%em%';

create view vw_Music as
select baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai, tacgia.ten_tgia
from baiviet
join theloai on baiviet.ma_tloai = theloai.ma_tloai
join tacgia on baiviet.ma_tgia = tacgia.ma_tgia;

--- -một tập hợp các câu truy vấn và lưu trữ chúng trong cơ sở dữ liệu giúp ( tính đồng nhất và dễ sử dụng , bảo mật và phân quyền , tối ưu hóa truy vấn , tái sử dụng và dễ bảo trì ) 
select * from vw_Music;

delimiter //

create procedure sp_DSBaiViet(in TenTheLoai varchar(255))
begin
    declare vTheLoaiID int;
    
    select ma_tloai into vTheLoaiID
    from theloai
    where ten_tloai = TenTheLoai;
    
    if vTheLoaiID is null then
        select 'Thể loại không tồn tại.' as 'lỗi';
    else
        select *
        from baiviet
        where ma_tloai = vTheLoaiID;
    end if;
end //

delimiter ;
drop procedure if exists sp_DSBaiViet;
call sp_DSBaiViet('Nhạc trữ tình');



alter table theloai
add SLBaiViet int;

delimiter //

create trigger tg_CapNhatTheLoai
after insert on baiviet
for each row
begin
    -- Cập nhật số lượng bài viết trong bảng theloai
    update theloai
    set SLBaiViet = SLBaiViet + 1
    where ma_tloai = new.ma_tloai;
end //

delimiter ;


create table users
(
	user varchar(200) not null primary key,
    password varchar(200) not null ,
    role enum('Admin', 'User') not null
);
insert into users values ('PXT' ,'123' , 'Admin');