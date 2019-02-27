<?php $this->load->view('template/search') ?>
<!--CONTENTS-->
<section id="listCont" class="ca-link">
    <div class="inbox listBox">
        <div class="listTOP"> <span>이번 주 신건</span>
            <ul class="listFilter">
                <li><a href="#">감정가</a><span>▲</span></li>
                <li><a href="#">최저가</a><span>▲</span></li>
                <li><a href="#">유찰횟수</a><span>▲</span></li>
                <li><a href="#">매각기일</a><span>▲</span></li>
                <li><a href="#">조회수</a><span>▲</span></li>
            </ul>
        </div>
        <div class="listTOP2"> <span>총 <?php ?> 건</span>
            <div class="listStArea"> <a href="#" class="listSet">리스트조건설정</a>
                <ul>
                    <li class="listView"></li>
                    <li class="cardView"></li>
                </ul>
            </div>
        </div>
        <!-- 여기서 부터 리스트 박스 생성 -->
        <?php foreach ($result as $key => $value) { ?>
            <div class="saListBox first-list">
            
            <p class="saAddr"><a href="/caview?case_mul_code=<?= $value->case_mul_code ?>" onClick="window.open(this.href, '', 'width='+sw+',height='+sh+',top=0 ,left='+ml+',resizable=no, scrollbar=yes')"><?php echo $value->mul_juso ?> <?php echo $value->mul_use_type; ?></a></p>
            <span class="favoriteBtn">♡</span><span class="favorite">관심물건</span> 
            <!--리스트 테이블-->
            <ul class="listTable">
                <li class="col-3 tbSbox">
                    <ul>
                        <li class="tbTit">사건번호</li>
                        <li class="tbTxt"><?php echo $value->case_num; ?>[<?php echo $value->mul_num; ?>]</li>
                        <li class="tbTit">진행현황</li>
                        <li class="tbTxt"><?php echo get_mul_biding_end_state($value->case_mul_code); ?></li>
                        <li class="tbTit">매각기일</li>
                        <li class="tbTxt"><?php echo $value->mul_biding_date; ?></li>
                    </ul>
                </li>
                <li class="col-3 tbSbox">
                    <ul>
                        <li class="tbTit">물건종류</li>
                        <li class="tbTxt"><?php echo $value->mul_use_type; ?></li>
                        <li class="tbTit">건물면적</li>
                        <li class="tbTxt">59.94㎡</li>
                        <li class="tbTit">대지권</li>
                        <li class="tbTxt">19.5㎡</li>
                    </ul>
                </li>
                <li class="col-3 tbSbox">
                    <ul>
                        <li class="tbTit moneyTit">감정가</li>
                        <li class="tbTxt moneyTxt gamMoney"><?php echo $value->mul_evaluate_price; ?></li>
                        <li class="tbTit moneyTit">최저가</li>
                        <li class="tbTxt moneyTxt"><?php echo $value->mul_lowest_price; ?></li>
                    </ul>
                </li>
                <li class="col-3 tbSbox">
                    <ul>
                        <img src="/public/images/attention.svg" alt="특수물건" class="attentionIcon">
                        <span class="attTit">위험요소</span>
                        <li class="tbTxt attTxt">1. 가등기</li>
                        <li class="tbTxt attTxt">2. 대항력</li>
                        <li class="tbTxt attTxt">3. 재매각</li>
                    </ul>
                </li>
            </ul>
        </div>

        <?php } ?>
        
    </div>
</section>