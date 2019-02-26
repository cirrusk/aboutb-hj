<!-- SEARCH -->
<section id="search">
  <div class="inbox searchBox">
    <ul class="rec">
      <li>추천 검색어 : </li>
      <li><a href="#">서울 아파트</a></li>
      <li><a href="#">부산 빌라</a></li>
      <li><a href="#">가산동 사무실</a></li>
      <li><a href="#">2017타경 0000</a></li>
      <li><a href="#">인천 목욕시설</a></li>
    </ul>
    
    <form action="/search" method="get" id="categoryForm">
      <ul class="searchBar">
        <li>
          <label for="searchCltrNm">통합검색</label>
        </li>
        <li>
          <input id="searchCltrNm" name="searchCltrNm" type="text" placeholder="원하는 물건을 입력하세요.">
        </li>
      </ul>
      <div class="smallbox">
        <ul class="caNo">
          <li>사건번호</li>
          <li>
            <select>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
            </select>
          </li>
          <li>타경</li>
          <li>
            <input type="text" name="searchCaNo" placeholder="사건번호">
          </li>
        </ul>
        <ul class="caCal">
          <li>매각기일</li>
          <li>
            <input type="text" name="date" class="date" placeholder="날짜를 선택하세요">
          </li>
          <li class="wave">~</li>
          <li>
            <input type="text" name="date" class="date" placeholder="날짜를 선택하세요">
          </li>
        </ul>
      </div>
      <input type="submit" value="검색하기" id="topSearchBtn" name="submit">
      <div class="tabBox">
        <ul>
          <li class="mulgun"><a href="#">물건종류</a></li>
          <li class="sojae"><a href="#">소재지</a></li>
          <li class="price"><a href="#">가격 / 면적</a></li>
          <li class="sagun"><a href="#">사건현황</a></li>
          <li class="special"><a href="#">특수권리 / 물건</a></li>
        </ul>
      </div>
      <div id="searchContBox">
        <!-- mulgunBox -->
        <div class="mulgunBox">
          <div class="selBox">
            <ul class="jugeo">
              <li class="firstChk">
                <input type="checkbox" name="jugeo" id="jugeo">
                <label for="jugeo">주거시설</label>
              </li>
              <li class="sangseChkBox">
                <ul class="sangseChk">

                  <li>
                    <input type="checkbox" class="jugeoChk" id="apt" name="apt">
                    <label for="apt">아파트</label>  
                  </li>
                  <li>
                    <input type="checkbox" class="jugeoChk" id="dandok" name="dandok">
                    <label for="dandok">단독주택</label>
                  </li>
                  <li>
                    <input type="checkbox" class="jugeoChk" id="dagagu" name="dagagu">
                    <label for="dagagu">다가구(원룸)</label>
                  </li>
                  <li>
                    <input type="checkbox" class="jugeoChk" id="dasedae" name="dasedae">
                    <label for="dasedae">다세대(빌라)</label>
                  </li>
                  <li>
                    <input type="checkbox" class="jugeoChk" id="geunlin_jutaek" name="geunlin_jutaek">
                    <label for="geunlin_jutaek">근린주택</label>
                  </li>
                  <li>
                    <input type="checkbox" class="jugeoChk" id="offijugeo" name="offijugeo">
                    <label for="offijugeo">오피스텔(주거용)</label>
                  </li>
                
              </ul>
            </li>
          </ul>
          <ul class="sangup">
            <li class="firstChk">
              <input type="checkbox" name="sangup" id="sangup">
              <label for="sangup">상업 / 사무실</label>
            </li>
            <li class="sangseChkBox">
              <ul class="sangseChk">
                <li>
                  <input type="checkbox" id="geunlin_sangga" class="sangupChk" name="geunlin_sangga">
                  <label for="geunlin_sangga">근린상가</label>
                </li>
                <li>
                  <input type="checkbox" id="geunlin_sisul" class="sangupChk" name="geunlin_sisul">
                  <label for="geunlin_sisul">근린시설</label>
                </li>
                <li>
                  <input type="checkbox" id="officetel" class="sangupChk" name="officetel">
                  <label for="officetel">오피스텔</label>
                </li>
                <li>
                  <input type="checkbox" id="samusil" class="sangupChk" name="samusil">
                  <label for="samusil">사무실</label>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="gongjang">
            <li class="firstChk">
              <input type="checkbox" name="gongchang" id="gongchang">
              <label for="gongchang"> 공장 / 창고 </label>
            </li>
            <li class="sangseChkBox">
              <ul class="sangseChk">
                <li>
                  <input type="checkbox" class="gongchangChk" id="gongjang" name="gongjang">
                  <label for="gongjang">공장</label>
                </li>
                <li>
                  <input type="checkbox" class="gongchangChk" id="apt_gongjang" name="apt_gongjang">
                  <label for="apt_gongjang">아파트형 공장</label>
                </li>
                <li>
                  <input type="checkbox" class="gongchangChk" id="changgo" name="changgo">
                  <label for="changgo">창고</label>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="toji">
            <li class="firstChk">
              <input type="checkbox" name="toji" id="toji">
              <label for="toji">토지</label>
            </li>
            <li class="sangseChkBox">
              <ul class="sangseChk">
                <li>
                  <input type="checkbox" class="tojiChk" id="daeji" name="daeji">
                  <label for="daeji">대지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="jeon" name="jeon">
                  <label for="jeon">전</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="dap" name="dap">
                  <label for="dap">답</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="imya" name="imya">
                  <label for="imya">임야</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="gwasuwon" name="gwasuwon">
                  <label for="gwasuwon">과수원</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="japjongji" name="japjongji">
                  <label for="japjongji">잡종지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="doro" name="doro">
                  <label for="doro">도로</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="myoji" name="myoji">
                  <label for="myoji">묘지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="mokjang_yj" name="mokjang_yj">
                  <label for="mokjang_yj">목장용지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="gongjang_yj" name="gongjang_yj">
                  <label for="gongjang_yj">공장용지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="hakgyo_yj" name="hakgyo_yj">
                  <label for="hakgyo_yj">학교용지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="changgo_yj" name="changgo_yj">
                  <label for="changgo_yj">창고용지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="cheyook_yj" name="cheyook_yj">
                  <label for="cheyook_yj">체육용지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="jonggyo_yj" name="jonggyo_yj">
                  <label for="jonggyo_yj">종교용지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="gugeo" name="gugeo">
                  <label for="gugeo">구거</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="hacheon" name="hacheon">
                  <label for="hacheon">하천</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="yuji" name="yuji">
                  <label for="yuji">유지</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="jebang" name="jebang">
                  <label for="jebang">제방</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="juchajang" name="juchajang">
                  <label for="juchajang">주차장</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="yeomjeon" name="yeomjeon">
                  <label for="yeomjeon">염전</label>
                </li>
                <li>
                  <input type="checkbox" class="tojiChk" id="yangeojang" name="yangeojang">
                  <label for="yangeojang">양어장</label>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="etc">
            <li class="firstChk">
              <input type="checkbox" name="etc" id="etc">
              <label for="etc">기타 </li>
                <li class="sangseChkBox">
                  <ul class="sangseChk">
                    <li>
                      <input type="checkbox" class="etcChk" id="condo" name="condo">
                      <label for="condo">콘도</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="golfjang" name="golfjang">
                      <label for="golfjang">골프장</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="skijang" name="skijang">
                      <label for="skijang">스키장</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="lesure" name="lesure">
                      <label for="lesure">레저시설</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="mokyok" name="mokyok">
                      <label for="mokyok">목욕탕</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="gyoyook" name="gyoyook">
                      <label for="gyoyook">교육시설</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="nongga" name="nongga">
                      <label for="nongga">농가시설</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="uiryo" name="uiryo">
                      <label for="uiryo">의료시설</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="jooyoo" name="jooyoo">
                      <label for="jooyoo">주유소</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="noyooja" name="noyooja">
                      <label for="noyooja">노유자시설</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="bunnyo" name="bunnyo">
                      <label for="bunnyo">분뇨시설</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="jadongcha" name="jadongcha">
                      <label for="jadongcha">자동차시설</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="jangrye" name="jangrye">
                      <label for="jangrye">장례시설</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="munhwa" name="munhwa">
                      <label for="munhwa">문화,집회시설</label>
                    </li>
                    <li>
                      <input type="checkbox" class="etcChk" id="etc_estate" name="etc_estate">
                      <label for="etc_estate">기타 부동산</label>
                    </li>
                  </ul>
                </form>
                </li>
                <a href="#" class="plusbtn">＋</a>
              </ul>
            </div>
          </div>
          <!-- sojaeBox -->
          <div class="sojaeBox">
            <div class="selBox">
              <ul class="sojaeji">
                <li class="firstChk col-2">
                  물건 소재지
                </li>
                <li class="sojaejiCont">
                  <ul class="sojaejiBtnBox">
                    <li class="on"><a href="#" class="jibunBtn">지번</a></li>
                    <li><a href="#" class="doroBtn">도로명</a></li>
                    <li><a href="#" class="bubwonBtn">법원</a></li>
                  </ul>
                  <div id="sojaejiContBox">
                    <!-- 지번 -->
                    <ul class="sojaejiSelBox on">
                      <li>
                        <select>
                          <option value="sido">시 / 도</option>
                          <option value="seoul">서울특별시</option>
                          <option value="gyeonggi">부산광역시</option>
                          <option value="busan">대구광역시</option>
                        </select>
                      </li>
                      <li>
                        <select>
                          <option value="gugun">구 / 군</option>
                          <option value="guro">구로구</option>
                          <option value="geumcheon">금천구</option>
                          <option value="gangnam">강남구</option>
                        </select>
                      </li>
                      <li>
                        <input type="text" name="eubmyundong" placeholder="읍 / 면 / 동">
                      </li>
                    </ul>
                    <!-- 도로명 -->
                    <ul class="sojaejiSelBox">
                      <li>
                        <select>
                          <option value="sido">시 / 도</option>
                          <option value="seoul">서울</option>
                          <option value="gyeonggi">경기도</option>
                          <option value="busan">부산광역시</option>
                        </select>
                      </li>
                      <li>
                        <select>
                          <option value="gugun">구 / 군</option>
                          <option value="guro">구로구</option>
                          <option value="geumcheon">금천구</option>
                          <option value="gangnam">강남구</option>
                        </select>
                      </li>
                      <li>
                        <input type="text" name="eubmyundong" placeholder="도로명">
                      </li>
                      <li>
                        <input type="text" name="gunmulnum" placeholder="건물번호">
                      </li>
                    </ul>
                    <!-- 법원 -->
                    <ul class="sojaejiSelBox">
                      <li>
                        <select name="bubwonSel">
                          <option value="60">전체 법원</option>
                          <option value="1">서울중앙지방법원</option>
                          <option value="2">서울동부지방법원</option>
                          <option value="3">서울남부지방법원</option>
                          <option value="4">서울서부지방법원</option>
                          <option value="5">서울북부지방법원</option>
                          <option value="6">의정부지방법원</option>
                          <option value="7">고양지원</option>
                          <option value="8">인천지방법원</option>
                          <option value="9">부천지원</option>
                          <option value="10">수원지방법원</option>
                          <option value="11">성남지원</option>
                          <option value="12">여주지원</option>
                          <option value="13">평택지원</option>
                          <option value="14">안산지원</option>
                          <option value="15">안양지원</option>
                          <option value="16">춘천지방법원</option>
                          <option value="17">강릉지원</option>
                          <option value="18">원주지원</option>
                          <option value="19">속초지원</option>
                          <option value="20">영월지원</option>
                          <option value="21">청주지방법원</option>
                          <option value="22">충주지원</option>
                          <option value="23">제천지원</option>
                          <option value="24">영동지원</option>
                          <option value="25">대전지방법원</option>
                          <option value="26">홍성지원</option>
                          <option value="27">논산지원</option>
                          <option value="28">천안지원</option>
                          <option value="29">공주지원</option>
                          <option value="30">서산지원</option>
                          <option value="31">대구지방법원</option>
                          <option value="32">안동지원</option>
                          <option value="33">경주지원</option>
                          <option value="34">김천지원</option>
                          <option value="35">상주지원</option>
                          <option value="36">의성지원</option>
                          <option value="37">영덕지원</option>
                          <option value="38">포항지원</option>
                          <option value="39">대구서부지원</option>
                          <option value="40">부산지방법원</option>
                          <option value="41">부산동부지원</option>
                          <option value="42">부산서부지원</option>
                          <option value="43">울산지방법원</option>
                          <option value="44">창원지방법원</option>
                          <option value="45">마산지원</option>
                          <option value="46">진주지원</option>
                          <option value="47">통영지원</option>
                          <option value="48">밀양지원</option>
                          <option value="49">거창지원</option>
                          <option value="50">광주지방법원</option>
                          <option value="51">목포지원</option>
                          <option value="52">장흥지원</option>
                          <option value="53">순천지원</option>
                          <option value="54">해남지원</option>
                          <option value="55">전주지방법원</option>
                          <option value="56">군산지원</option>
                          <option value="57">정읍지원</option>
                          <option value="58">남원지원</option>
                          <option value="59">제주지방법원</option>
                        </select>
                      </li>
                      <li>
                        <select>
                          <option value="gugun">전체 계</option>
                          <option value="guro">1계</option>
                          <option value="geumcheon">2계</option>
                          <option value="gangnam">3계</option>
                        </select>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
              <ul class="subway">
                <li class="firstChk col-2">
                  역세권
                </li>
                <li class="subwayCont">
                  <ul class="subwayBtnBox">
                    <li><a href="#" class="subway_sudoBtn">수도권</a></li>
                    <li><a href="#" class="subway_busanBtn">부산</a></li>
                    <li><a href="#" class="subway_gwangjuBtn">광주</a></li>
                    <li><a href="#" class="subway_daeguBtn">대구</a></li>
                    <li><a href="#" class="subway_daejeonBtn">대전</a></li>
                  </ul>
                  <ul class="subwayMap">
                    <li><img src="/public/images/subway.png" alt="노선도"></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="priceBox">
            <div class="selBox">
              <div class="priceinBox">
                <ul class="gamjeongga">
                  <li class="firstChk col-2">감정가</li>
                  <li>
                    <select>
                      <option value="minGamjeongga">최소 금액</option>
                      <option value="100">100만 원</option>
                      <option value="200">200만 원</option>
                      <option value="300">300만 원</option>
                      <option value="400">400만 원</option>
                      <option value="500">500만 원</option>
                      <option value="1000">1000만 원</option>
                      <option value="2000">2000만 원</option>
                      <option value="3000">3000만 원</option>
                      <option value="4000">4000만 원</option>
                      <option value="5000">5000만 원</option>
                      <option value="10000">1억 원</option>
                      <option value="20000">2억 원</option>
                      <option value="30000">3억 원</option>
                      <option value="40000">4억 원</option>
                      <option value="50000">5억 원</option>
                      <option value="100000">10억 원</option>
                      <option value="200000">20억 원</option>
                      <option value="300000">30억 원</option>
                      <option value="400000">40억 원</option>
                      <option value="500000">50억 원</option>
                      <option value="500000">50억 원 이상</option>
                    </select>
                  </li>
                  <li class="wave">~</li>
                  <li>
                    <select>
                      <option value="maxGamjeongga">최대 금액</option>
                      <option value="100">100만 원</option>
                      <option value="200">200만 원</option>
                      <option value="300">300만 원</option>
                      <option value="400">400만 원</option>
                      <option value="500">500만 원</option>
                      <option value="1000">1000만 원</option>
                      <option value="2000">2000만 원</option>
                      <option value="3000">3000만 원</option>
                      <option value="4000">4000만 원</option>
                      <option value="5000">5000만 원</option>
                      <option value="10000">1억 원</option>
                      <option value="20000">2억 원</option>
                      <option value="30000">3억 원</option>
                      <option value="40000">4억 원</option>
                      <option value="50000">5억 원</option>
                      <option value="100000">10억 원</option>
                      <option value="200000">20억 원</option>
                      <option value="300000">30억 원</option>
                      <option value="400000">40억 원</option>
                      <option value="500000">50억 원</option>
                      <option value="500000">50억 원 이상</option>
                    </select>
                  </li>
                </ul>
                <ul class="minPrice">
                  <li class="firstChk col-2">최저가</li>
                  <li>
                    <select>
                      <option value="minGamjeongga">최소 금액</option>
                      <option value="100">100만 원</option>
                      <option value="200">200만 원</option>
                      <option value="300">300만 원</option>
                      <option value="400">400만 원</option>
                      <option value="500">500만 원</option>
                      <option value="1000">1000만 원</option>
                      <option value="2000">2000만 원</option>
                      <option value="3000">3000만 원</option>
                      <option value="4000">4000만 원</option>
                      <option value="5000">5000만 원</option>
                      <option value="10000">1억 원</option>
                      <option value="20000">2억 원</option>
                      <option value="30000">3억 원</option>
                      <option value="40000">4억 원</option>
                      <option value="50000">5억 원</option>
                      <option value="100000">10억 원</option>
                      <option value="200000">20억 원</option>
                      <option value="300000">30억 원</option>
                      <option value="400000">40억 원</option>
                      <option value="500000">50억 원</option>
                      <option value="500000">50억 원 이상</option>
                    </select>
                  </li>
                  <li class="wave">~</li>
                  <li>
                    <select>
                      <option value="maxGamjeongga">최대 금액</option>
                      <option value="100">100만 원</option>
                      <option value="200">200만 원</option>
                      <option value="300">300만 원</option>
                      <option value="400">400만 원</option>
                      <option value="500">500만 원</option>
                      <option value="1000">1000만 원</option>
                      <option value="2000">2000만 원</option>
                      <option value="3000">3000만 원</option>
                      <option value="4000">4000만 원</option>
                      <option value="5000">5000만 원</option>
                      <option value="10000">1억 원</option>
                      <option value="20000">2억 원</option>
                      <option value="30000">3억 원</option>
                      <option value="40000">4억 원</option>
                      <option value="50000">5억 원</option>
                      <option value="100000">10억 원</option>
                      <option value="200000">20억 원</option>
                      <option value="300000">30억 원</option>
                      <option value="400000">40억 원</option>
                      <option value="500000">50억 원</option>
                      <option value="500000">50억 원 이상</option>
                    </select>
                  </li>
                </ul>
              </div>
              <div class="priceinBox area">
                <ul class="area-field">
                  <li class="firstChk col-2">대지면적</li>
                  <li>
                    <label class="switch-light switch-candy" onclick="">
                      <input type="checkbox">
                      <span>
                        <span>㎡</span>
                        <span>평</span>
                        <a></a>
                      </span>
                    </label>
                  </li>
                  <li class="area-resetBtn">조건 초기화</li>
                  <li class="area-updown">단위 ↓</li>
                </ul>
                <ul class="area-field arc-field">
                  <li class="firstChk col-2">건물면적</li>
                  <li>
                    <label class="switch-light switch-candy" onclick="">
                      <input type="checkbox">
                      <span>
                        <span>㎡</span>
                        <span>평</span>
                        <a></a>
                      </span>
                    </label>
                  </li>
                  <li class="area-resetBtn">조건 초기화</li>
                  <li class="area-updown">단위 ↓</li>
                </ul>
                <ul class="field-slider">
                  <li class="col-2 firstChk"></li>
                  <li class="sliderBox">
                    <!-- Slider -->
                    <div class="pips-slider"></div>
                  </li>
                </ul>
                <ul class="field-slider fs-right">
                  <li class="col-2 firstChk"></li>
                  <li class="sliderBox">
                    <!-- Slider -->
                    <div class="pips-slider"></div>
                  </li>
                </ul>
                <ul class="field-slider">
                  <li class="col-2 firstChk"></li>
                  <li>
                    <div class="wan-spinner input-PM">
                      <a href="javascript:void(0)" class="minus">-</a>
                      <input type="text" value="1">
                      <a href="javascript:void(0)" class="plus">+</a>
                    </div>
                  </li>
                  <li class="wave">
                    ~
                  </li>
                  <li>
                    <div class="wan-spinner input-PM">
                      <a href="javascript:void(0)" class="minus">-</a>
                      <input type="text" value="1000">
                      <a href="javascript:void(0)" class="plus">+</a>
                    </div>
                  </li>
                </ul>
                <ul class="field-slider fs-right" style="right: -5px;">
                  <li class="col-2 firstChk"></li>
                  <li>
                    <div class="wan-spinner input-PM">
                      <a href="javascript:void(0)" class="minus">-</a>
                      <input type="text" value="1">
                      <a href="javascript:void(0)" class="plus">+</a>
                    </div>
                  </li>
                  <li class="wave">
                    ~
                  </li>
                  <li>
                    <div class="wan-spinner input-PM">
                      <a href="javascript:void(0)" class="minus">-</a>
                      <input type="text" value="1000">
                      <a href="javascript:void(0)" class="plus">+</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="sagunBox">
            <div class="selBox">
              <div class="sagun-radioBox">
                <div class="sagun-rB-left">
                  <span class="firstChk col-4">사건현황</span>
                  <div class="col-8">
                    <input type="radio" id="ing" name="ing"><label for="ing">진행사건 전체</label>
                    <input type="radio" id="new" name="ing"><label for="new">신건</label>
                    <input type="radio" id="old" name="ing"><label for="old" class="last-radio">유찰</label>
                  </div><br>
                  <div class="ingx">
                    <input type="radio" id="and" name="ing" class="first-radioBtn"><label for="and">진행 외 사건</label>
                    <select>
                      <option value="1">진행 외 사건전체</option>
                      <option value="2">매각/매각허가</option>
                      <option value="3">잔금납부</option>
                      <option value="4">배당기일/종결</option>
                      <option value="4">변경/연기</option>
                      <option value="4">불허가/허가취소</option>
                      <option value="4">정지</option>
                      <option value="4">각하</option>
                      <option value="4">기각</option>
                      <option value="4">기타</option>
                      <option value="4">이송</option>
                      <option value="4">취소</option>
                      <option value="4">취하</option>
                    </select>
                  </div>

                </div>
                <div class="sagun-rB-right">
                  <span class="firstChk col-4">경매구분</span>
                  <input type="radio" id="ing" name="bid_gubun"><label for="ing">전체선택</label>
                  <input type="radio" id="new" name="bid_gubun"><label for="new">임의경매</label>
                  <input type="radio" id="old" name="bid_gubun"><label for="old" class="last-radio">강제경매</label>
                </div>
              </div>
            </div>
            <div class="priceinBox area">
              <ul class="area-field">
                <li class="firstChk col-2">유찰횟수</li>
                <li class="area-resetBtn">조건 초기화</li>
              </ul>
              <ul class="area-field arc-field">
                <li class="firstChk col-2">감정가 대비 할인율</li>
                <li class="area-resetBtn">조건 초기화</li>
              </ul>
              <ul class="field-slider">
                <li class="col-2 firstChk"></li>
                <li class="sliderBox">
                  <!-- Slider -->
                  <div class="pips-slider"></div>
                </li>
              </ul>
              <ul class="field-slider fs-right">
                <li class="col-2 firstChk"></li>
                <li class="sliderBox">
                  <!-- Slider -->
                  <div class="pips-slider"></div>
                </li>
              </ul>
              <ul class="field-slider">
                <li class="col-2 firstChk"></li>
                <li>
                  <div class="wan-spinner input-PM">
                    <a href="javascript:void(0)" class="minus">-</a>
                    <input type="text" value="1">
                    <a href="javascript:void(0)" class="plus">+</a>
                  </div>
                </li>
                <li class="wave">
                  ~
                </li>
                <li>
                  <div class="wan-spinner input-PM">
                    <a href="javascript:void(0)" class="minus">-</a>
                    <input type="text" value="1000">
                    <a href="javascript:void(0)" class="plus">+</a>
                  </div>
                </li>
              </ul>
              <ul class="field-slider fs-right" style="right: -5px;">
                <li class="col-2 firstChk"></li>
                <li>
                  <div class="wan-spinner input-PM">
                    <a href="javascript:void(0)" class="minus">-</a>
                    <input type="text" value="1">
                    <a href="javascript:void(0)" class="plus">+</a>
                  </div>
                </li>
                <li class="wave">
                  ~
                </li>
                <li>
                  <div class="wan-spinner input-PM">
                    <a href="javascript:void(0)" class="minus">-</a>
                    <input type="text" value="1000">
                    <a href="javascript:void(0)" class="plus">+</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="specialBox">
            <div class="selBox">
              <ul class="special-allChk">
                <li class="firstChk">
                </li>
                <li class="sangseChkBox">
                  <ul class="sangseChk specialChk">
                    <li>
                      <input type="checkbox" value="jugeo" id="allChk">
                      <label for="allChk">전체선택</label>
                    </li>
                    <li>
                      <input type="checkbox" value="jugeo" id="allChk_ex">
                      <label for="allChk_ex">체크항목 제외</label>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="special-selChk">
                <li class="firstChk">특수권리 / 물건</li>
                <li class="sangseChkBox">
                  <ul class="sangseChk specialChk">
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="daehang">
                      <label for="daehang">대항력 있는 임차인</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="jeonse">
                      <label for="jeonse">전세권설정 / 임차권등기</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="imcha">
                      <label for="imcha">임차인 없는 물건</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="yoochi">
                      <label for="yoochi">유치권</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="bubjung">
                      <label for="bubjung">법정지상권</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="bunmyo">
                      <label for="bunmyo">분묘기지권</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="gacheobun">
                      <label for="gacheobun">가처분</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="gadeunggi">
                      <label for="gadeunggi">가등기</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="daejigwon">
                      <label for="daejigwon">대지권 미등기</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="tojiByuldo">
                      <label for="tojiByuldo">토지별도등기</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="yego">
                      <label for="yego">예고 등기</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="jibunSell">
                      <label for="jibunSell">지분매각</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="gunmulSell">
                      <label for="gunmulSell">건물만 매각</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="tojiSell">
                      <label for="tojiSell">토지만 매각</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="hyungsik">
                      <label for="hyungsik">형식적 경매</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="reSell">
                      <label for="reSell">재매각</label>
                    </li>
                    <li>
                      <input type="checkbox" value="specialChk" class="specialmulChk" id="byunghap">
                      <label for="byunghap">병합 / 중복사건</label>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="selChkBox">
          <div>
            <ul>
              <li><a href="#">주거시설 전체</a></li>
              <li><a href="#">가격 ~2억 이하</a></li>
              <li><a href="#">서울지역</a></li>
              <li><a href="#">현황 진행 중</a></li>
              <li><a href="#">유치권</a></li>
              <li><a href="#">토지 주차장</a></li>
              <li><a href="#">유찰2회 이상</a></li>
              <li><a href="#">경기 광명시</a></li>
              <li><a href="#">대항력 있는 임차인</a></li>
            </ul>
          </div>
        </div>
        <div class="btnBox">
          <div>
            <a href="#" class="searchResetBtn">조건 초기화</a>
            <input type="submit" value="검색하기" id="botSearchBtn">
          </div>
        </div>
      </div>
      <a href="#" class="sangseView">상세보기</a>
    </section>
