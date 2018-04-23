import { Component } from '@angular/core';
import { CountQuestion } from 'app/luyentap/count-question';
@Component({
    selector: 'diem-doanthang',
    styleUrls:['chuong4.css'],
    templateUrl: 'chuong4.html',
})

export class demTamgiac {
    countques: CountQuestion[] = [
        {
            name_ques: "Đếm số hình tam giác.",
            link_img: "./assets/image/tamgiac1.jpg",
            true_ans: 4
        },
        {
            name_ques: "Đếm số hình tam giác.",
            link_img: "./assets/image/tamgiac.jpg",
            true_ans: 6
        },
        {
            name_ques: "Đếm số hình tam giác.",
            link_img: "./assets/image/tamgiac3.jpg",
            true_ans: 2
        },
        {
            name_ques: "Đếm số hình tam giác.",
            link_img: "./assets/image/tamgiac4.jpg",
            true_ans: 4
        },
        {
            name_ques: "Đếm số hình tam giác.",
            link_img: "./assets/image/tamgiac2.jpg",
            true_ans: 5
        }
    ];
    b1_c4_head = false;
    b2_c4_head = true;
    nameQues = true;
    showAns = true; // hiện câu hỏi 
    nextLess = false;
    x = 0;

    count_true = 0;
    endLessPer = false;
    endLess = false;
    bai2_chuong4= false;
    bai1_chuong5 = false;

    rightAns(): void {      // trả lời đúng thêm một sao vào khối có id = starAward
        var img = document.createElement("IMG");
        img.setAttribute("src", "./assets/image/true.png");
        document.getElementById("starAward").appendChild(img);

    }

    checkAns(value) {
        if (parseInt(value) == this.countques[this.x].true_ans) {
            this.rightAns();          // thêm 1 ngôi sao vào trong khung 
            this.count_true += 1;     // số câu đúng tăng thêm 1
            if (this.x <= this.countques.length)
                this.x += 1;            // chỉ số đối tượng tăng lên 1

            if (this.x == this.countques.length && this.count_true == this.countques.length) {  // chỉ số bằng độ dài, số câu đúng = độ dài
                this.nameQues = false;
                this.showAns = false;
                this.nextLess = true;
                this.endLessPer = true;
                this.bai1_chuong5 = true;
            }

        } else {

            if (this.x <= this.countques.length)
                this.x += 1;
            if (this.x == this.countques.length) {
                this.nameQues = false;
                this.showAns = false;
                this.nextLess = true;
                this.endLess = true;
                this.bai1_chuong5 = true;
                if (this.count_true == 0) {
                    var para = document.createElement("P");
                    var t = document.createTextNode("Bạn không đạt được sao nào, cố gắng lần sau nhé!");
                    para.appendChild(t);
                    document.getElementById("panel_star").appendChild(para);
                }
            }

        }


    }
}