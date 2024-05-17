@foreach($places as $place)
@php
$uniqueStates[$place->name_state] = $place; // Store unique states
@endphp
@endforeach
<div class="sc-dc27d06c-0 cqxFaL" style="
   width: -webkit-fill-available;
   ">
  <div class="sc-dc27d06c-1 bogiOa">
    <div poster="{{ Voyager::image(setting('site.image-bg-4')) }}"
      class="sc-dc27d06c-2 fybrgE">
      <div class="sc-dc27d06c-11 knoAqO"></div>
      <div class="sc-dc27d06c-3 ffsgBj">
        <div>
          <div class="sc-dc27d06c-4 ewuMOF">Explore India</div>
          <p class="sc-dc27d06c-5 cONwrt">A Journey Through Time, Colour And Culture</p>
        </div>
        <a href="india-trips.html">
          <div class="sc-15ffb5a6-0 cceWAy">Explore</div>
        </a>
      </div>
    </div>
    <div class="sc-dc27d06c-6 cTzBtm">
      <svg viewBox="0 0 32 32" aria-hidden="true" class="sc-dc27d06c-10 pDMnH">
        <path d="M14.19 16.005l7.869 7.868-2.129 2.129-9.996-9.997L19.937 6.002l2.127 2.129z"></path>
      </svg>
      <div style="transform:translateX(0%)" class="sc-dc27d06c-7 fAPovW">
        @foreach($uniqueStates as $state)
        @php
        $firstPlaceInState = $places->firstWhere('name_state', $state->name_state);
        @endphp
        <a class="sc-dc27d06c-8 gMLzxZ" href="{{ $state->name_state }}">
          <img src="http://127.0.0.1:8000/storage/{{ $firstPlaceInState->Image }}" alt="{{ $state->name_state }}"
            style="width:100%;display:block" />
          <div class="sc-ec0d87ba-0 erQJCr"></div>
          <div class="sc-afb16914-3 gXaokw">
            <h3>{{ $state->name_state }}</h3>
            <!-- Assuming $firstPlaceInState->starting_price contains the starting price -->
            <p>Starting Price Rs. </p>
          </div>
        </a>
        @endforeach
      </div>
      <svg viewBox="0 0 32 32" aria-hidden="true" class="sc-dc27d06c-9 gUeTQG">
        <path d="M18.629 15.997l-7.083-7.081L13.462 7l8.997 8.997L13.457 25l-1.916-1.916z"></path>
      </svg>
    </div>
    <div class="sc-e160fc49-0 gWTDwi">
      <div class="sc-e160fc49-1 fNzpBs">
        <div class="sc-e160fc49-2 dYgXoK"></div>
      </div>
    </div>
  </div>
</div>
<style data-styled="" data-styled-version="5.3.6">
  /*!sc*/
  .PhoneInputCountrySelectArrow {
    opacity: 1 !important;
    border-color: #fefefe !important;
  }

  /*!sc*/
  .PhoneInputInput {
    font-size: 16px !important;
    padding: 4px !important;
  }

  /*!sc*/
  data-styled.g1[id="sc-global-bllXnd1"] {
    content: "sc-global-bllXnd1,"
  }

  /*!sc*/
  .kpOaoh {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-bottom: 20px;
    position: relative;
  }

  /*!sc*/
  @media (max-width:600px) {
    .kpOaoh {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding-bottom: 16px;
    }
  }

  /*!sc*/
  data-styled.g2[id="sc-1697e5a4-0"] {
    content: "kpOaoh,"
  }

  /*!sc*/
  .gUJNjz {
    height: 100%;
    width: 24px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    align-self: center;
    position: absolute;
    left: 0.5vw;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gUJNjz {
      left: 2vw;
    }
  }

  /*!sc*/
  .liznBC {
    height: 40%;
    width: 24px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    align-self: center;
    position: absolute;
    left: 0.5vw;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .liznBC {
      left: 2vw;
    }
  }

  /*!sc*/
  data-styled.g3[id="sc-1697e5a4-1"] {
    content: "gUJNjz,liznBC,"
  }

  /*!sc*/
  .fhucTq {
    font-family: "Roboto";
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    color: #015f74;
    margin-bottom: 8px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .fhucTq {
      color: #015f74;
    }
  }

  /*!sc*/
  data-styled.g4[id="sc-1697e5a4-2"] {
    content: "fhucTq,"
  }

  /*!sc*/
  .eQRUfz {
    height: 48px;
    width: 100%;
    padding: 12px 42px;
    outline: none;
    border-radius: 5px;
    background: #ffffff;
    border: 1px solid #015f74;
  }

  /*!sc*/
  .eQRUfz:focus {
    border: 2px solid #015f74;
  }

  /*!sc*/
  .eQRUfz::placeholder {
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    color: rgba(12, 12, 12, 0.4);
  }

  /*!sc*/
  @media (max-width:600px) {
    .eQRUfz::-webkit-input-placeholder {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-size: 15.75px;
      line-height: 24px;
    }

    .eQRUfz::-moz-placeholder {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-size: 15.75px;
      line-height: 24px;
    }

    .eQRUfz:-ms-input-placeholder {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-size: 15.75px;
      line-height: 24px;
    }

    .eQRUfz::placeholder {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-size: 15.75px;
      line-height: 24px;
    }
  }

  /*!sc*/
  @media (min-width:1620px) {
    .eQRUfz::placeholder {
      font-size: 16px;
      line-height: 18px;
    }
  }

  /*!sc*/
  @media (max-width:600px) {
    .eQRUfz {
      height: 44px;
    }
  }

  /*!sc*/
  @media (min-width:1620px) {
    .eQRUfz {
      height: 50px;
    }
  }

  /*!sc*/
  data-styled.g5[id="sc-1697e5a4-3"] {
    content: "eQRUfz,"
  }

  /*!sc*/
  .kDqYLx {
    font-family: "Roboto";
    height: 90px;
    width: 100%;
    resize: none;
    padding: 12px 42px;
    margin-top: 8px;
    margin-bottom: 16px;
    border: 1px solid #015f74;
    border-radius: 5px;
  }

  /*!sc*/
  .kDqYLx:focus {
    outline: 1px solid #015f74;
  }

  /*!sc*/
  .kDqYLx::placeholder {
    font-family: "Roboto";
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    color: rgba(12, 12, 12, 0.4);
  }

  /*!sc*/
  @media (max-width:600px) {
    .kDqYLx::-webkit-input-placeholder {
      font-weight: 400;
      font-size: 15px;
      line-height: 14px;
    }

    .kDqYLx::-moz-placeholder {
      font-weight: 400;
      font-size: 15px;
      line-height: 14px;
    }

    .kDqYLx:-ms-input-placeholder {
      font-weight: 400;
      font-size: 15px;
      line-height: 14px;
    }

    .kDqYLx::placeholder {
      font-weight: 400;
      font-size: 15px;
      line-height: 14px;
    }
  }

  /*!sc*/
  @media (min-width:1620px) {
    .kDqYLx::placeholder {
      font-size: 16px;
      line-height: 18px;
    }
  }

  /*!sc*/
  data-styled.g6[id="sc-1697e5a4-4"] {
    content: "kDqYLx,"
  }

  /*!sc*/
  .finXlB {
    position: fixed;
    left: 50vw;
    bottom: 50vh;
    z-index: 15000;
    width: 0px;
    height: 0px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    overflow: hidden;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .finXlB {
      -webkit-align-items: end;
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: end;
      -webkit-transition: bottom top 0.4s ease-in-out;
      transition: bottom top 0.4s ease-in-out;
      -webkit-transition: bottom top 0.4s ease-in-out;
      width: 100vw;
      bottom: -100vh;
      height: 100vh;
      left: 0;
    }
  }

  /*!sc*/
  data-styled.g7[id="sc-2064a981-0"] {
    content: "finXlB,"
  }

  /*!sc*/
  .IUpLa {
    position: relative;
    height: 60%;
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-image: url();
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  /*!sc*/
  .IUpLa img {
    object-fit: cover;
  }

  /*!sc*/
  @media (max-width:600px) {
    .IUpLa {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g8[id="sc-2064a981-1"] {
    content: "IUpLa,"
  }

  /*!sc*/
  .jatVQo {
    width: 80vw;
    height: 80vh;
    background-color: white;
    border-radius: 15px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    position: relative;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
  }

  /*!sc*/
  @media (max-width:600px) {
    .jatVQo {
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      width: 100vw;
      height: 92vh;
      margin-top: 10vh;
      padding-top: 40px;
      border-radius: 15px 15px 0 0;
    }
  }

  /*!sc*/
  data-styled.g9[id="sc-2064a981-2"] {
    content: "jatVQo,"
  }

  /*!sc*/
  .dQTQGv {
    height: 24px;
    width: 24px;
    fill: transparent;
    border: none;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    top: 15px;
    right: 15px;
    cursor: pointer;
    background: transparent;
    z-index: 500;
    color: #fff;
    border-radius: 50%;
  }

  /*!sc*/
  data-styled.g10[id="sc-2064a981-3"] {
    content: "dQTQGv,"
  }

  /*!sc*/
  .kdLICM {
    width: 60%;
    height: 100%;
    border-radius: 15px 0 0 15px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  /*!sc*/
  @media (max-width:600px) {
    .kdLICM {
      width: 100%;
      height: 100%;
      padding: 0;
      -webkit-flex-direction: column-reverse;
      -ms-flex-direction: column-reverse;
      flex-direction: column-reverse;
    }
  }

  /*!sc*/
  data-styled.g11[id="sc-2064a981-4"] {
    content: "kdLICM,"
  }

  /*!sc*/
  .goBLmG {
    width: 40%;
    height: 100%;
    border-radius: 0 15px 15px 0;
    background-color: rgba(1, 175, 209, 0.15);
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 45px 22px;
    box-sizing: border-box;
  }

  /*!sc*/
  @media (max-width:600px) {
    .goBLmG {
      width: 90%;
      margin: 20px 0;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      align-self: center;
      height: 100%;
      border-radius: 0;
      padding: 15px;
      background-color: rgba(1, 175, 209, 0.15);
      border: 1px solid #015f74;
      border-radius: 8px;
    }
  }

  /*!sc*/
  data-styled.g12[id="sc-2064a981-5"] {
    content: "goBLmG,"
  }

  /*!sc*/
  .hmCGat {
    display: none;
  }

  /*!sc*/
  @media (max-width:600px) {
    .hmCGat {
      position: relative;
      height: 178px;
      width: 100%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin: 2vh 0;
      background-image: url();
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .hmCGat img {
      object-fit: contain;
    }
  }

  /*!sc*/
  data-styled.g13[id="sc-2064a981-6"] {
    content: "hmCGat,"
  }

  /*!sc*/
  .jhperS {
    font-family: "Roboto";
    font-weight: 700;
    font-size: 33.18px;
    line-height: 40px;
    text-align: center;
    padding: 40px 0 16px 0;
    color: #015F74;
  }

  /*!sc*/
  @media (max-width:600px) {
    .jhperS {
      font-family: "Roboto";
      font-weight: 700;
      font-size: 22.43px;
      line-height: 29px;
      padding: 0 0 8px 0;
    }
  }

  /*!sc*/
  data-styled.g14[id="sc-2064a981-7"] {
    content: "jhperS,"
  }

  /*!sc*/
  .gMbulY {
    font-family: "Roboto";
    font-style: normal;
    font-weight: 500;
    font-size: 19.2px;
    line-height: 27px;
    text-align: center;
    color: rgba(12, 12, 12, 0.7);
  }

  /*!sc*/
  @media (max-width:600px) {
    .gMbulY {
      font-family: "Roboto";
      font-weight: 500;
      font-size: 15.75px;
      line-height: 20px;
    }
  }

  /*!sc*/
  data-styled.g15[id="sc-2064a981-8"] {
    content: "gMbulY,"
  }

  /*!sc*/
  .duQmQI {
    height: 45px;
    width: 100%;
    background-color: #FEE60B;
    border-radius: 24px;
    outline: none;
    border: none;
    font-weight: 500;
    font-size: 18px;
    line-height: 135.19%;
    margin-top: 28px;
    color: rgba(12, 12, 12, 1);
    cursor: pointer;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    gap: 6px;
  }

  /*!sc*/
  .duQmQI:hover {
    background-color: #ffef5e;
  }

  /*!sc*/
  @media (max-width:600px) {
    .duQmQI {
      height: 42px;
      border-radius: 47px;
      font-weight: 500;
      font-size: 16px;
      line-height: 135.19%;
      margin: 3vw auto 6vw auto;
    }

    .duQmQI:hover {
      background-color: #ffef5e;
    }
  }

  /*!sc*/
  data-styled.g18[id="sc-2064a981-11"] {
    content: "duQmQI,"
  }

  /*!sc*/
  .bvMMfm {
    height: 3.2vw;
    width: 100%;
    background-color: #FEE60B;
    border-radius: 36px;
    outline: none;
    border: none;
    height: 3.2vw;
    font-family: "Roboto";
    font-weight: 500;
    font-size: 19.2px;
    line-height: 27px;
    color: rgba(12, 12, 12, 0.9);
    margin-top: 0;
    margin-bottom: 2px;
    cursor: pointer;
  }

  /*!sc*/
  .bvMMfm:hover {
    background-color: #ffef5e;
  }

  /*!sc*/
  @media (max-width:600px) {
    .bvMMfm {
      height: 48px;
      font-family: "Roboto";
      font-weight: 500;
      font-size: 15.75px;
      line-height: 20px;
      margin-top: 10px;
    }
  }

  /*!sc*/
  data-styled.g24[id="sc-13fbb96f-2"] {
    content: "bvMMfm,"
  }

  /*!sc*/
  .jApRtE {
    opacity: 0;
    position: fixed;
    bottom: 18vh;
    z-index: 20;
    left: -100vw;
    height: 5vw;
    width: 30vw;
    font-family: "Roboto";
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    background: #015f74;
    color: #fff;
    border: 1px solid #015f74;
    border-radius: 5px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 10px;
    -webkit-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .jApRtE {
      width: 94%;
      background-color: #015f74;
      color: white;
      top: -100vh;
      left: 2vw;
      margin: 0 3%;
      font-size: 14px;
      height: -webkit-fit-content;
      height: -moz-fit-content;
      height: fit-content;
      padding: 20px;
      -webkit-transition: all 1.2s ease-in-out;
      transition: all 1.2s ease-in-out;
    }
  }

  /*!sc*/
  data-styled.g33[id="sc-a399ec21-5"] {
    content: "jApRtE,"
  }

  /*!sc*/
  .hXzXzG {
    width: auto;
    height: auto;
    background: rgba(1, 175, 209, 0.02);
    border-radius: 6px;
    gap: 8px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {}

  /*!sc*/
  @media screen and (min-width:1620px) {
    .hXzXzG {
      height: 580px;
    }
  }

  /*!sc*/
  data-styled.g39[id="sc-6ce34238-0"] {
    content: "hXzXzG,"
  }

  /*!sc*/
  .cQCGKr {
    width: 100%;
    gap: 10px;
    position: relative;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .cQCGKr {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g40[id="sc-6ce34238-1"] {
    content: "cQCGKr,"
  }

  /*!sc*/
  .kDpTHA {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
    position: fixed;
    bottom: 30px;
    background-color: #01afd1;
    right: -100px;
    cursor: pointer;
    -webkit-transition: all 0.6s;
    transition: all 0.6s;
    z-index: 103;
  }

  /*!sc*/
  .kDpTHA img {
    width: 100%;
    height: auto;
  }

  /*!sc*/
  .kDpTHA:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
    -webkit-transition: scale 0.2s;
    transition: scale 0.2s;
  }

  /*!sc*/
  @media only screen and (max-width:900px) {
    .kDpTHA {
      display: none;
      box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
      bottom: 30px;
      right: -100px;
    }
  }

  /*!sc*/
  data-styled.g41[id="sc-bce235d7-0"] {
    content: "kDpTHA,"
  }

  /*!sc*/
  .cKmyBs {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
    position: fixed;
    bottom: 30px;
    right: -100px;
    cursor: pointer;
    -webkit-transition: all 0.6s;
    transition: all 0.6s;
    z-index: 103;
    display: none;
  }

  /*!sc*/
  .cKmyBs img {
    width: 100%;
    height: auto;
  }

  /*!sc*/
  @media only screen and (max-width:900px) {
    .cKmyBs {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
      bottom: 30px;
      right: -100px;
      z-index: 2;
    }
  }

  /*!sc*/
  data-styled.g42[id="sc-bce235d7-1"] {
    content: "cKmyBs,"
  }

  /*!sc*/
  .ifkCga {
    position: fixed;
    right: 30px;
    bottom: -800px;
    width: 70vw;
    background-color: white;
    border-radius: 5px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    box-shadow: 0px 0px 5px #999999;
    -webkit-transition: bottom 0.5s ease-in-out;
    transition: bottom 0.5s ease-in-out;
    z-index: 200;
  }

  /*!sc*/
  @media screen and (min-width:600px) {
    .ifkCga {
      width: 20vw;
    }
  }

  /*!sc*/
  data-styled.g43[id="sc-bce235d7-2"] {
    content: "ifkCga,"
  }

  /*!sc*/
  .dfMzqX {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    cursor: pointer;
    padding: 15px 10px;
    border-top: 1px solid #cccccc;
    border-bottom: 1px solid #cccccc;
  }

  /*!sc*/
  .dfMzqX.dfMzqX:first-child {
    margin-top: 0px;
    border: none;
  }

  /*!sc*/
  .dfMzqX.dfMzqX:last-child {
    margin-bottom: 0px;
    border: none;
  }

  /*!sc*/
  .dfMzqX img {
    height: 30px;
    margin-right: 10px;
  }

  /*!sc*/
  data-styled.g44[id="sc-bce235d7-3"] {
    content: "dfMzqX,"
  }

  /*!sc*/
  .hclDLY {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    cursor: pointer;
    padding: 15px 10px;
    border-top: 1px solid #cccccc;
    border-bottom: 1px solid #cccccc;
  }

  /*!sc*/
  .hclDLY:first-child {
    margin-top: 0px;
    border: none;
  }

  /*!sc*/
  .hclDLY:last-child {
    margin-bottom: 0px;
    border: none;
  }

  /*!sc*/
  .hclDLY img {
    height: 30px;
    margin-right: 10px;
  }

  /*!sc*/
  data-styled.g45[id="sc-bce235d7-4"] {
    content: "hclDLY,"
  }

  /*!sc*/
  .RqVkN {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .RqVkN {
      display: block;
    }
  }

  /*!sc*/
  data-styled.g48[id="sc-6b56a34b-0"] {
    content: "RqVkN,"
  }

  /*!sc*/
  .UoZCN {
    width: 48px;
    height: 48px;
    position: relative;
    margin-left: 50px;
    background: url(https://images.wanderon.in/icons/facebook);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  /*!sc*/
  .UoZCN:hover {
    cursor: pointer;
  }

  /*!sc*/
  .UoZCN:first-child {
    margin-left: 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .UoZCN {
      width: 34px;
      height: 34px;
      position: relative;
      margin-left: 20px;
    }

    .UoZCN:first-child {
      margin-left: 0;
    }
  }

  /*!sc*/
  .kdPtrZ {
    width: 48px;
    height: 48px;
    position: relative;
    margin-left: 50px;
    background: url(https://images.wanderon.in/icons/instagram);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  /*!sc*/
  .kdPtrZ:hover {
    cursor: pointer;
  }

  /*!sc*/
  .kdPtrZ:first-child {
    margin-left: 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .kdPtrZ {
      width: 34px;
      height: 34px;
      position: relative;
      margin-left: 20px;
    }

    .kdPtrZ:first-child {
      margin-left: 0;
    }
  }

  /*!sc*/
  .wdokH {
    width: 48px;
    height: 48px;
    position: relative;
    margin-left: 50px;
    background: url(https://images.wanderon.in/icons/linkedin);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  /*!sc*/
  .wdokH:hover {
    cursor: pointer;
  }

  /*!sc*/
  .wdokH:first-child {
    margin-left: 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .wdokH {
      width: 34px;
      height: 34px;
      position: relative;
      margin-left: 20px;
    }

    .wdokH:first-child {
      margin-left: 0;
    }
  }

  /*!sc*/
  .kOWURU {
    width: 48px;
    height: 48px;
    position: relative;
    margin-left: 50px;
    background: url(https://images.wanderon.in/icons/youtube);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  /*!sc*/
  .kOWURU:hover {
    cursor: pointer;
  }

  /*!sc*/
  .kOWURU:first-child {
    margin-left: 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .kOWURU {
      width: 34px;
      height: 34px;
      position: relative;
      margin-left: 20px;
    }

    .kOWURU:first-child {
      margin-left: 0;
    }
  }

  /*!sc*/
  .klWJVD {
    width: 48px;
    height: 48px;
    position: relative;
    margin-left: 50px;
    background: url(https://images.wanderon.in/icons/pinterest);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  /*!sc*/
  .klWJVD:hover {
    cursor: pointer;
  }

  /*!sc*/
  .klWJVD:first-child {
    margin-left: 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .klWJVD {
      width: 34px;
      height: 34px;
      position: relative;
      margin-left: 20px;
    }

    .klWJVD:first-child {
      margin-left: 0;
    }
  }

  /*!sc*/
  data-styled.g50[id="sc-84bb4a56-1"] {
    content: "UoZCN,kdPtrZ,wdokH,kOWURU,klWJVD,"
  }

  /*!sc*/
  .eQXxKm {
    text-align: center;
    margin-bottom: 30px;
    margin-top: 60px;
  }

  /*!sc*/
  @media (max-width:769px) {
    .eQXxKm {
      margin-top: 2.37vh;
      margin-bottom: 0;
    }
  }

  /*!sc*/
  data-styled.g51[id="sc-84bb4a56-2"] {
    content: "eQXxKm,"
  }

  /*!sc*/
  .bhsbka {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-bottom: 24px;
  }

  /*!sc*/
  @media (max-width:769px) {
    .bhsbka {
      margin-bottom: 16px;
    }
  }

  /*!sc*/
  data-styled.g52[id="sc-84bb4a56-3"] {
    content: "bhsbka,"
  }

  /*!sc*/
  .hpEkWZ {
    font-weight: 500;
    font-size: 22px;
    line-height: 26px;
    margin-top: 10px;
    text-align: center;
    color: rgba(12, 12, 12, 0.8);
  }

  /*!sc*/
  @media (max-width:769px) {
    .hpEkWZ {
      margin-top: 0;
      font-weight: 500;
      font-size: 12px;
      line-height: 14px;
    }
  }

  /*!sc*/
  @media (min-width:1550px) {
    .hpEkWZ {
      font-size: 28px;
    }
  }

  /*!sc*/
  .hpElaM {
    font-weight: 500;
    font-size: 14px;
    line-height: 26px;
    margin-top: 10px;
    text-align: center;
    color: rgba(12, 12, 12, 0.8);
  }

  /*!sc*/
  @media (max-width:769px) {
    .hpElaM {
      margin-top: 0;
      font-weight: 500;
      font-size: 12px;
      line-height: 14px;
    }
  }

  /*!sc*/
  @media (min-width:1550px) {
    .hpElaM {
      font-size: 28px;
    }
  }

  /*!sc*/
  data-styled.g54[id="sc-84bb4a56-5"] {
    content: "hpEkWZ,hpElaM,"
  }

  /*!sc*/
  .gWmCvb {
    font-weight: 400;
    font-size: 20px;
    line-height: 23px;
    text-align: center;
    margin-top: 10px;
    color: rgba(12, 12, 12, 0.8);
  }

  /*!sc*/
  @media (max-width:935px) {
    .gWmCvb {
      font-size: 12px;
    }
  }

  /*!sc*/
  @media (min-width:1550px) {
    .gWmCvb {
      font-size: 25px;
    }
  }

  /*!sc*/
  @media (max-width:769px) {
    .gWmCvb {
      margin-top: 10px;
      font-weight: 400;
      font-size: 12px;
      line-height: 130%;
      width: 320px;
    }
  }

  /*!sc*/
  data-styled.g55[id="sc-84bb4a56-6"] {
    content: "gWmCvb,"
  }

  /*!sc*/
  .kgOVHI {
    list-style-type: none;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-top: 50px;
  }

  /*!sc*/
  @media (max-width:769px) {
    .kgOVHI {
      margin-bottom: 12px;
      margin-top: 30px;
    }
  }

  /*!sc*/
  data-styled.g56[id="sc-84bb4a56-7"] {
    content: "kgOVHI,"
  }

  /*!sc*/
  .bHjsGz {
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    text-align: center;
    color: #383838;
  }

  /*!sc*/
  @media (max-width:935px) {
    .bHjsGz {
      font-size: 12px;
    }
  }

  /*!sc*/
  @media (max-width:769px) {
    .bHjsGz {
      font-weight: 700;
      font-size: 12px;
      line-height: 14px;
    }
  }

  /*!sc*/
  @media (min-width:1550px) {
    .bHjsGz {
      font-size: 25px;
    }
  }

  /*!sc*/
  data-styled.g57[id="sc-84bb4a56-8"] {
    content: "bHjsGz,"
  }

  /*!sc*/
  .iaBMxS {
    position: relative;
    height: 100%;
    aspect-ratio: 1/1;
  }

  /*!sc*/
  .iaBMxS img {
    object-fit: cover;
  }

  /*!sc*/
  @media (min-width:1950px) {
    .iaBMxS {
      width: 80px;
    }
  }

  /*!sc*/
  data-styled.g58[id="sc-63d1a386-0"] {
    content: "iaBMxS,"
  }

  /*!sc*/
  .hqsdvO {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #fff;
    color: #332d2d;
    font-weight: 400;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    height: 60px;
    position: fixed;
    z-index: 99;
  }

  /*!sc*/
  @media (max-width:768px) {
    .hqsdvO {
      display: none;
    }
  }

  /*!sc*/
  @media (min-width:1950px) {
    .hqsdvO {
      height: 84px;
    }
  }

  /*!sc*/
  data-styled.g59[id="sc-63d1a386-1"] {
    content: "hqsdvO,"
  }

  /*!sc*/
  .bhiBwd {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 63px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    border: 1px solid #01afd1;
    padding: 10px 20px;
    gap: 6px;
  }

  /*!sc*/
  .bhiBwd p {
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    color: #121212;
    opacity: 0.9;
    color: #01afd1;
  }

  /*!sc*/
  @media (max-width:1136px) {
    .bhiBwd p {
      font-size: 12px;
      line-height: 14px;
    }
  }

  /*!sc*/
  @media (min-width:1950px) {
    .bhiBwd p {
      font-size: 25px;
      line-height: 21px;
    }
  }

  /*!sc*/
  data-styled.g61[id="sc-63d1a386-3"] {
    content: "bhiBwd,"
  }

  /*!sc*/
  .knqLTd {
    float: left;
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /*!sc*/
  data-styled.g62[id="sc-63d1a386-4"] {
    content: "knqLTd,"
  }

  /*!sc*/
  .tTmBr {
    position: relative;
    display: block;
    text-align: center;
    -webkit-text-decoration: none;
    text-decoration: none;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    cursor: pointer;
    opacity: 0.9;
  }

  /*!sc*/
  .tTmBr:focus {
    font-weight: 700;
  }

  /*!sc*/
  @media (min-width:1440px) and (max-width:1920px) {
    .tTmBr {
      font-size: 14px;
      line-height: 16px;
    }
  }

  /*!sc*/
  @media (max-width:1024px) {
    .tTmBr {
      font-size: 12px;
      line-height: 14px;
    }
  }

  /*!sc*/
  @media (min-width:1950px) {
    .tTmBr {
      font-size: 25px;
      line-height: 21px;
    }
  }

  /*!sc*/
  .tTmBr:after {
    display: block;
    width: 60%;
    content: "";
    border-bottom: solid 3px #01afd1;
    border-radius: 18px;
    -webkit-transform: scaleX(0);
    -ms-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transition: -webkit-transform 250ms ease-in-out;
    -webkit-transition: transform 250ms ease-in-out;
    transition: transform 250ms ease-in-out;
    -webkit-transform-origin: (100% 0%);
    -ms-transform-origin: (100% 0%);
    transform-origin: (100% 0%);
  }

  /*!sc*/
  .tTmBr:hover:after {
    font-weight: 500;
    -webkit-transform: scaleX(1);
    -ms-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transition-delay: 150ms;
    transition-delay: 150ms;
    -webkit-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
  }

  /*!sc*/
  .tTmBr:focus:after {
    font-weight: bold;
    -webkit-transform: scaleX(1);
    -ms-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transition-delay: 150ms;
    transition-delay: 150ms;
    -webkit-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
  }

  /*!sc*/
  data-styled.g63[id="sc-63d1a386-5"] {
    content: "tTmBr,"
  }

  /*!sc*/
  .kfbvKv {
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    gap: 32px;
    list-style-type: none;
    margin: 0;
    padding: 12px 50px;
    overflow: hidden;
    height: 100%;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /*!sc*/
  @media (max-width:1400px) {
    .kfbvKv {
      width: 60%;
    }
  }

  /*!sc*/
  @media (min-width:1024px) and (max-width:1440px) {
    .kfbvKv {
      width: 70%;
      gap: 20px;
    }
  }

  /*!sc*/
  data-styled.g64[id="sc-63d1a386-6"] {
    content: "kfbvKv,"
  }

  /*!sc*/
  .kLHUGo {
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 7.32vw;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-left: 50px;
  }

  /*!sc*/
  data-styled.g65[id="sc-63d1a386-7"] {
    content: "kLHUGo,"
  }

  /*!sc*/
  .ldKiCi {
    position: relative;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    width: 100%;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .ldKiCi {
      position: relative;
      margin-top: 20px;
      height: -webkit-fit-content;
      height: -moz-fit-content;
      height: fit-content;
      width: 100%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-direction: column-reverse;
      -ms-flex-direction: column-reverse;
      flex-direction: column-reverse;
    }
  }

  /*!sc*/
  data-styled.g68[id="sc-d6d4c47-0"] {
    content: "ldKiCi,"
  }

  /*!sc*/
  .inGuDA {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    cursor: pointer;
    min-width: 200px;
    padding: 10px 6.15vw 10px 24px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 10px;
    border-radius: 67px;
    border: 1px solid #01afd1;
    background: #f8f8f8;
  }

  /*!sc*/
  .inGuDA::-webkit-input-placeholder {
    color: rgba(0, 0, 0, 0.38);
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  /*!sc*/
  .inGuDA::-moz-placeholder {
    color: rgba(0, 0, 0, 0.38);
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  /*!sc*/
  .inGuDA:-ms-input-placeholder {
    color: rgba(0, 0, 0, 0.38);
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  /*!sc*/
  .inGuDA::placeholder {
    color: rgba(0, 0, 0, 0.38);
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  /*!sc*/
  .inGuDA:focus {
    outline: 1px solid #fff;
  }

  /*!sc*/
  @media screen and (min-width:600px) and (max-width:1440px) {
    .inGuDA {
      padding: 10px 20px;
    }

    .inGuDA::-webkit-input-placeholder {
      color: rgba(0, 0, 0, 0.38);
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    .inGuDA::-moz-placeholder {
      color: rgba(0, 0, 0, 0.38);
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    .inGuDA:-ms-input-placeholder {
      color: rgba(0, 0, 0, 0.38);
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    .inGuDA::placeholder {
      color: rgba(0, 0, 0, 0.38);
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .inGuDA {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      padding: 10px 6.15vw;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      gap: 10px;
      border-radius: 67px;
      border: 1px solid #01afd1;
      background: #f8f8f8;
    }

    .inGuDA::-webkit-input-placeholder {
      color: rgba(0, 0, 0, 0.38);
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    .inGuDA::-moz-placeholder {
      color: rgba(0, 0, 0, 0.38);
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    .inGuDA:-ms-input-placeholder {
      color: rgba(0, 0, 0, 0.38);
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    .inGuDA::placeholder {
      color: rgba(0, 0, 0, 0.38);
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    .inGuDA:focus {
      outline: 1px solid #fff;
    }
  }

  /*!sc*/
  data-styled.g69[id="sc-d6d4c47-1"] {
    content: "inGuDA,"
  }

  /*!sc*/
  .kzOmCo {
    position: absolute;
    height: 100%;
    top: 0;
    right: 10px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    gap: 6px;
    z-index: 2;
  }

  /*!sc*/
  .kzOmCo svg {
    cursor: pointer;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .kzOmCo {
      position: absolute;
      height: 100%;
      top: 0;
      right: 10px;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      gap: 6px;
      z-index: 2;
    }
  }

  /*!sc*/
  data-styled.g70[id="sc-d6d4c47-2"] {
    content: "kzOmCo,"
  }

  /*!sc*/
  .cMyHXp {
    background-color: #01afd1;
    color: white;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    left: 0;
    right: 0;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-weight: 400;
    width: 100%;
    height: 60px;
    z-index: 5;
    position: fixed;
    margin-top: 60px;
  }

  /*!sc*/
  @media (max-width:768px) {
    .cMyHXp {
      height: 70px;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
      justify-content: space-between;
      position: fixed;
      z-index: 600;
      margin-top: 0;
    }
  }

  /*!sc*/
  @media (min-width:1950px) {
    .cMyHXp {
      height: 84px;
      margin-top: 84px;
    }
  }

  /*!sc*/
  data-styled.g75[id="sc-c542116a-0"] {
    content: "cMyHXp,"
  }

  /*!sc*/
  .hFhqDO {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    height: 60px;
    color: #ffffff;
    opacity: 0.9;
    position: relative;
    margin-right: 44px;
    height: 100%;
  }

  /*!sc*/
  @media (min-width:648px) and (max-width:847px) {
    .hFhqDO {
      font-size: 12px;
    }
  }

  /*!sc*/
  @media (min-width:1950px) {
    .hFhqDO {
      font-size: 25px;
    }
  }

  /*!sc*/
  data-styled.g76[id="sc-c542116a-1"] {
    content: "hFhqDO,"
  }

  /*!sc*/
  .drEiIC {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    list-style-type: none;
    margin-left: 51px;
  }

  /*!sc*/
  .drEiIC li:hover {
    cursor: pointer;
  }

  /*!sc*/
  @media (max-width:648px) {
    .drEiIC li {
      font-size: 16px;
    }
  }

  /*!sc*/
  @media (max-width:768px) {
    .drEiIC {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g77[id="sc-c542116a-2"] {
    content: "drEiIC,"
  }

  /*!sc*/
  .cGUiRx {
    display: none;
    position: relative;
    width: 60px;
    height: 60px;
  }

  /*!sc*/
  @media (max-width:768px) {
    .cGUiRx {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
      justify-content: space-between;
      width: 60%;
      height: 46px;
      margin: 26px 0 26px 26px;
    }
  }

  /*!sc*/
  data-styled.g78[id="sc-c542116a-3"] {
    content: "cGUiRx,"
  }

  /*!sc*/
  .gUusza {
    display: none;
  }

  /*!sc*/
  @media (max-width:768px) {
    .gUusza {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      position: fixed;
      right: 6.5px;
      margin-right: 7.8px;
      z-index: 99;
      right: 20px;
      margin-right: 35px;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      align-self: center;
      position: relative;
    }

    .gUusza svg {
      height: 4vh;
    }

    .gUusza path {
      fill: none;
      stroke: white;
      stroke-width: 6;
      -webkit-transition: stroke-dasharray 300ms cubic-bezier(0.4, 0, 0.2, 1), stroke-dashoffset 300ms cubic-bezier(0.4, 0, 0.2, 1);
      transition: stroke-dasharray 300ms cubic-bezier(0.4, 0, 0.2, 1), stroke-dashoffset 300ms cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gUusza path {
      fill: white;
      stroke: white;
      stroke-width: 0;
    }
  }

  /*!sc*/
  .ebkNyx {
    display: none;
  }

  /*!sc*/
  @media (max-width:768px) {
    .ebkNyx {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      position: fixed;
      right: 6.5px;
      margin-right: 7.8px;
      z-index: 99;
    }

    .ebkNyx svg {
      height: 4vh;
    }

    .ebkNyx path {
      fill: none;
      stroke: white;
      stroke-width: 6;
      -webkit-transition: stroke-dasharray 300ms cubic-bezier(0.4, 0, 0.2, 1), stroke-dashoffset 300ms cubic-bezier(0.4, 0, 0.2, 1);
      transition: stroke-dasharray 300ms cubic-bezier(0.4, 0, 0.2, 1), stroke-dashoffset 300ms cubic-bezier(0.4, 0, 0.2, 1);
    }
  }

  /*!sc*/
  data-styled.g79[id="sc-c542116a-4"] {
    content: "gUusza,ebkNyx,"
  }

  /*!sc*/
  .fFYzTe {
    width: 68%;
    height: 100vh;
    background-color: white;
    -webkit-transform: scaleX(0);
    -ms-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    opacity: 0;
  }

  /*!sc*/
  data-styled.g80[id="sc-c542116a-5"] {
    content: "fFYzTe,"
  }

  /*!sc*/
  .hzkXDZ {
    font-weight: 400;
    font-size: 14px;
    color: #444444;
    list-style-type: none;
  }

  /*!sc*/
  .hzkXDZ li {
    padding: 1.77vh 0 1.78vh 4.62vw;
    font-size: 100%;
    border-bottom: 0.5px solid rgba(0, 0, 0, 0.15);
  }

  /*!sc*/
  data-styled.g82[id="sc-c542116a-7"] {
    content: "hzkXDZ,"
  }

  /*!sc*/
  .jOCPhO {
    font-weight: 500;
    font-size: 14px;
    line-height: 1.21em;
    color: #444444;
    list-style-type: none;
    margin-top: 5px;
  }

  /*!sc*/
  .jOCPhO li {
    font-size: 100%;
    margin: 2.37vh 0 2.37vh 4.62vw;
  }

  /*!sc*/
  data-styled.g83[id="sc-c542116a-8"] {
    content: "jOCPhO,"
  }

  /*!sc*/
  .gZxOwd {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-transform: scaleX(0);
    -ms-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    z-index: 9;
    position: fixed;
    top: 70px;
    right: 0;
    width: 100vw;
    -webkit-transition: 0.3s ease-in-out;
    transition: 0.3s ease-in-out;
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
  }

  /*!sc*/
  data-styled.g84[id="sc-c542116a-9"] {
    content: "gZxOwd,"
  }

  /*!sc*/
  .edrFtm {
    position: fixed;
    top: 70px;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 3;
    display: none;
    background: rgba(16, 16, 16, 0.4);
  }

  /*!sc*/
  data-styled.g85[id="sc-c542116a-10"] {
    content: "edrFtm,"
  }

  /*!sc*/
  .fLIxYP {
    width: auto;
    height: auto;
    position: absolute;
    top: 40px;
    z-index: 999;
  }

  /*!sc*/
  data-styled.g88[id="sc-c542116a-13"] {
    content: "fLIxYP,"
  }

  /*!sc*/
  .fQWDrs {
    position: relative;
    width: 16px;
    height: 16px;
    color: black;
    -webkit-transition: -webkit-transform 0.5s ease;
    -webkit-transition: transform 0.5s ease;
    transition: transform 0.5s ease;
  }

  /*!sc*/
  @media (min-width:1920px) {
    .fQWDrs {
      width: 28px;
      height: 28px;
    }
  }

  /*!sc*/
  data-styled.g89[id="sc-c542116a-14"] {
    content: "fQWDrs,"
  }

  /*!sc*/
  .bmcQvJ {
    stroke-dasharray: 60 207;
    stroke-dashoffset: 0;
  }

  /*!sc*/
  data-styled.g90[id="sc-c542116a-15"] {
    content: "bmcQvJ,"
  }

  /*!sc*/
  .eBufLd {
    stroke-dasharray: 60 60;
    stroke-dashoffset: 0;
  }

  /*!sc*/
  data-styled.g91[id="sc-c542116a-16"] {
    content: "eBufLd,"
  }

  /*!sc*/
  .hiasgT {
    stroke-dasharray: 60 207;
    stroke-dashoffset: 0;
  }

  /*!sc*/
  data-styled.g92[id="sc-c542116a-17"] {
    content: "hiasgT,"
  }

  /*!sc*/
  .gPExpW {
    color: black;
    background: #ffffff;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 6px;
    margin-top: 15px;
    max-width: 227px;
    padding: 20px;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    display: none;
  }

  /*!sc*/
  .gPExpW::before {
    content: "";
    position: absolute;
    top: 6px;
    fill: #ffffff;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #fff;
  }

  /*!sc*/
  data-styled.g94[id="sc-fbb58b92-0"] {
    content: "gPExpW,"
  }

  /*!sc*/
  .hwQmGO {
    -webkit-transition-delay: 0.4s;
    transition-delay: 0.4s;
  }

  /*!sc*/
  data-styled.g95[id="sc-fbb58b92-1"] {
    content: "hwQmGO,"
  }

  /*!sc*/
  .fCDdCZ {
    list-style-type: none;
  }

  /*!sc*/
  data-styled.g96[id="sc-fbb58b92-2"] {
    content: "fCDdCZ,"
  }

  /*!sc*/
  .eFFjOk {
    list-style: none;
    gap: 15px;
    padding: 4px 10px;
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-family: "Roboto";
    font-style: normal;
    font-weight: 500;
    font-size: 13.33px;
    line-height: 20px;
    margin: 0;
    color: rgba(12, 12, 12, 0.75);
  }

  /*!sc*/
  .eFFjOk:hover,
  .eFFjOk:active {
    background: rgba(1, 175, 209, 0.05);
    color: #015f74;
    outline: 1px solid #01afd1;
    border-radius: 4px;
  }

  /*!sc*/
  data-styled.g98[id="sc-fbb58b92-4"] {
    content: "eFFjOk,"
  }

  /*!sc*/
  .haqHaS {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-scroll-behavior: smooth;
    -moz-scroll-behavior: smooth;
    -ms-scroll-behavior: smooth;
    scroll-behavior: smooth;
  }

  /*!sc*/
  data-styled.g99[id="sc-40620a97-0"] {
    content: "haqHaS,"
  }

  /*!sc*/
  .hzZIu {
    width: 100%;
    min-height: 100vh;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #ffffff;
    max-width: 100vw;
    margin-top: 120px;
    -webkit-scroll-behavior: smooth;
    -moz-scroll-behavior: smooth;
    -ms-scroll-behavior: smooth;
    scroll-behavior: smooth;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .hzZIu {
      margin-top: 0;
      overflow-x: hidden;
    }
  }

  /*!sc*/
  data-styled.g100[id="sc-40620a97-1"] {
    content: "hzZIu,"
  }

  /*!sc*/
  .daeAkO {
    padding: 60px 10%;
    width: 100%;
    background: #01afd1;
    display: grid;
    grid-template-columns: repeat(7, 1fr);
  }

  /*!sc*/
  @media (max-width:600px) {
    .daeAkO {
      padding: 30px 0;
      text-align: center;
      grid-template-columns: repeat(1, 1fr);
      font-weight: 400;
      font-size: 12px;
      line-height: 144.69%;
      text-align: center;
      color: #ffffff;
    }
  }

  /*!sc*/
  data-styled.g101[id="sc-9446a9b1-0"] {
    content: "daeAkO,"
  }

  /*!sc*/
  .hDvaRz {
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    color: #ffffff;
    margin-bottom: 9px;
  }

  /*!sc*/
  @media (max-width:600px) {
    .hDvaRz {
      font-weight: 700;
      font-size: 15px;
      line-height: 18px;
    }
  }

  /*!sc*/
  @media (min-width:1520px) {
    .hDvaRz {
      font-size: 26px;
    }
  }

  /*!sc*/
  data-styled.g102[id="sc-9446a9b1-1"] {
    content: "hDvaRz,"
  }

  /*!sc*/
  .kYHUTl {
    font-weight: 400;
    font-size: 14px;
    line-height: 126.19%;
    font-family: "Roboto";
    color: #eeeeee;
  }

  /*!sc*/
  @media (max-width:1140px) {
    .kYHUTl {
      font-size: 12px;
    }
  }

  /*!sc*/
  @media (max-width:769px) {
    .kYHUTl {
      font-family: "Roboto";
      text-align: justify;
      font-size: 12px;
      line-height: 17.363px;
      margin-bottom: 3.55vh;
    }
  }

  /*!sc*/
  @media (min-width:1620px) {
    .kYHUTl {
      font-size: 20px;
    }
  }

  /*!sc*/
  data-styled.g103[id="sc-9446a9b1-2"] {
    content: "kYHUTl,"
  }

  /*!sc*/
  .fGRUFJ {
    padding: 0 20px;
    width: 19.61vw;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    position: relative;
  }

  /*!sc*/
  .fGRUFJ ul {
    list-style-type: none;
    font-weight: 400;
    font-size: 14px;
    line-height: 16px;
    color: #eeeeee;
  }

  /*!sc*/
  .fGRUFJ ul li {
    font-weight: 400;
    font-size: 12px;
    line-height: 14px;
    margin-bottom: 4px;
    cursor: pointer;
  }

  /*!sc*/
  .fGRUFJ ul li:hover {
    color: #ffffff;
  }

  /*!sc*/
  @media (min-width:1620px) {
    .fGRUFJ ul li {
      font-size: 20px;
      line-height: 21px;
    }
  }

  /*!sc*/
  @media (max-width:600px) {
    .fGRUFJ {
      width: 100%;
      text-align: start;
    }
  }

  /*!sc*/
  data-styled.g104[id="sc-9446a9b1-3"] {
    content: "fGRUFJ,"
  }

  /*!sc*/
  .dZwodf {
    width: 19.61vw;
    padding: 0 20px;
  }

  /*!sc*/
  @media (max-width:600px) {
    .dZwodf {
      display: block;
      width: 100%;
    }
  }

  /*!sc*/
  data-styled.g105[id="sc-9446a9b1-4"] {
    content: "dZwodf,"
  }

  /*!sc*/
  .gEFsDg {
    position: relative;
    height: 300px;
    width: 10px;
    right: 0;
    top: 0;
  }

  /*!sc*/
  @media (max-width:600px) {
    .gEFsDg {
      display: none;
    }
  }

  /*!sc*/
  @media (min-width:1520px) {
    .gEFsDg {
      width: 20px;
    }
  }

  /*!sc*/
  data-styled.g106[id="sc-9446a9b1-5"] {
    content: "gEFsDg,"
  }

  /*!sc*/
  .gbgtvs {
    width: 100%;
    position: relative;
    margin-top: 60px;
    height: 9.51vw;
    background-image: url();
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  /*!sc*/
  @media (max-width:600px) {
    .gbgtvs {
      display: none;
    }
  }

  /*!sc*/
  @media (min-width:1520px) {
    .gbgtvs {
      height: 130px;
    }
  }

  /*!sc*/
  data-styled.g107[id="sc-9446a9b1-6"] {
    content: "gbgtvs,"
  }

  /*!sc*/
  .gjvdHd {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gjvdHd {
      display: block;
      width: 100%;
      height: 100px;
      position: relative;
      bottom: 0;
      background-image: url();
      background-position: center;
      background-repeat: no-repeat;
      background-size: conver;
    }

    .gjvdHd img {
      object-fit: cover;
      background: no-repeat;
    }
  }

  /*!sc*/
  data-styled.g108[id="sc-9446a9b1-7"] {
    content: "gjvdHd,"
  }

  /*!sc*/
  .iDkKlN {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: #01afd1;
    border: 1px solid #fff;
    position: fixed;
    bottom: 100px;
    right: -100px;
    cursor: pointer;
    -webkit-transition: all 0.6s;
    transition: all 0.6s;
    z-index: 103;
    border-radius: 50%;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .iDkKlN {
      margin-bottom: 0px;
      right: -100px;
      z-index: 2;
    }
  }

  /*!sc*/
  data-styled.g109[id="sc-479e4f5a-0"] {
    content: "iDkKlN,"
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gmIFTu {
      width: calc(100% + 20px);
      z-index: 2;
      display: grid;
      grid-template-columns: repeat(11, 18vw);
      overflow-x: scroll;
      gap: 12px;
      padding-right: 20px;
    }

    .gmIFTu::-webkit-scrollbar {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g262[id="sc-87d047f2-0"] {
    content: "gmIFTu,"
  }

  /*!sc*/
  .HzQBY {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 10px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  /*!sc*/
  data-styled.g263[id="sc-87d047f2-1"] {
    content: "HzQBY,"
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .esiWLg {
      width: 100%;
      height: 100%;
      aspect-ratio: 1/1;
      border-radius: 50%;
      position: relative;
    }

    .esiWLg img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      aspect-ratio: 1/1;
      border-radius: 50%;
    }
  }

  /*!sc*/
  data-styled.g264[id="sc-87d047f2-2"] {
    content: "esiWLg,"
  }

  /*!sc*/
  .fVBBKl {
    color: #121212;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    text-align: center;
  }

  /*!sc*/
  data-styled.g265[id="sc-87d047f2-3"] {
    content: "fVBBKl,"
  }

  /*!sc*/
  .gBRoW {
    width: 100%;
    overflow-x: hidden;
    -webkit-scroll-behavior: smooth;
    -moz-scroll-behavior: smooth;
    -ms-scroll-behavior: smooth;
    scroll-behavior: smooth;
    -webkit-scroll-snap-type: x mandatory;
    -moz-scroll-snap-type: x mandatory;
    -ms-scroll-snap-type: x mandatory;
    scroll-snap-type: x mandatory;
  }

  /*!sc*/
  .gBRoW::-webkit-scrollbar {
    display: none;
  }

  /*!sc*/
  data-styled.g267[id="sc-87d047f2-5"] {
    content: "gBRoW,"
  }

  /*!sc*/
  .eMbJqE {
    display: grid;
    grid-template-columns: repeat(22, calc(16% - 16px));
    grid-auto-flow: column;
    grid-column-gap: 16px;
    -webkit-transition: -webkit-transform 0.5s ease;
    -webkit-transition: transform 0.5s ease;
    transition: transform 0.5s ease;
  }

  /*!sc*/
  data-styled.g268[id="sc-87d047f2-6"] {
    content: "eMbJqE,"
  }

  /*!sc*/
  .jcHDhZ {
    width: 100%;
    aspect-ratio: 168 / 220;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 11px;
    background: url(), lightgray 50% / cover no-repeat;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  /*!sc*/
  data-styled.g269[id="sc-87d047f2-7"] {
    content: "jcHDhZ,"
  }

  /*!sc*/
  .dKclXZ {
    height: 30px;
    width: 30px;
    background-color: #F2F2F2;
    border-radius: 50%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    cursor: pointer;
  }

  /*!sc*/
  .dKclXZ:hover {
    opacity: 0.9;
  }

  /*!sc*/
  data-styled.g270[id="sc-87d047f2-8"] {
    content: "dKclXZ,"
  }

  /*!sc*/
  .jlTKWr {
    height: 30px;
    width: 30px;
    background-color: #01afd1;
    border-radius: 50%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    cursor: pointer;
  }

  /*!sc*/
  .jlTKWr:hover {
    opacity: 0.9;
  }

  /*!sc*/
  data-styled.g271[id="sc-87d047f2-9"] {
    content: "jlTKWr,"
  }

  /*!sc*/
  .jXmMsA {
    display: block;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .jXmMsA {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g272[id="sc-3c19efc9-0"] {
    content: "jXmMsA,"
  }

  /*!sc*/
  .iCiYiJ {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .iCiYiJ {
      display: block;
    }
  }

  /*!sc*/
  data-styled.g273[id="sc-3c19efc9-1"] {
    content: "iCiYiJ,"
  }

  /*!sc*/
  .gWTDwi {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 4px 10px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    gap: 8px;
    margin-top: 20px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gWTDwi {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g274[id="sc-e160fc49-0"] {
    content: "gWTDwi,"
  }

  /*!sc*/
  .fNzpBs {
    width: 125px;
    height: 6px;
    border-radius: 32px;
    outline: 1px solid #e5e5e5;
    background: #fbfbfb;
    position: relative;
  }

  /*!sc*/
  data-styled.g275[id="sc-e160fc49-1"] {
    content: "fNzpBs,"
  }

  /*!sc*/
  .dYgXoK {
    width: 33px;
    height: 8px;
    position: absolute;
    left: 0;
    top: -1px;
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%);
    border-radius: 32px;
    background: #01afd1;
    -webkit-transition: -webkit-transform 0.3s ease-in-out;
    -webkit-transition: transform 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out;
  }

  /*!sc*/
  data-styled.g276[id="sc-e160fc49-2"] {
    content: "dYgXoK,"
  }

  /*!sc*/
  .eprIDt {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: flex-start;
    -webkit-box-align: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 20px 0 8px 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .eprIDt {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      padding: 10px 0;
      -webkit-align-items: flex-start;
      -webkit-box-align: flex-start;
      -ms-flex-align: flex-start;
      align-items: flex-start;
      margin: 20px 0 8px 0;
    }
  }

  /*!sc*/
  .dIfAmh {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: flex-start;
    -webkit-box-align: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 20px 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .dIfAmh {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      padding: 10px 0;
      -webkit-align-items: flex-start;
      -webkit-box-align: flex-start;
      -ms-flex-align: flex-start;
      align-items: flex-start;
      margin: 20px 0;
    }
  }

  /*!sc*/
  data-styled.g277[id="sc-7c717fbc-0"] {
    content: "eprIDt,dIfAmh,"
  }

  /*!sc*/
  .hJhrOe {
    color: #2D2D2D;
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .hJhrOe {
      color: #2D2D2D;
      font-size: 16px;
      font-style: normal;
      font-weight: 600;
      line-height: normal;
    }
  }

  /*!sc*/
  data-styled.g278[id="sc-7c717fbc-1"] {
    content: "hJhrOe,"
  }

  /*!sc*/
  .dBJXyu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /*!sc*/
  data-styled.g279[id="sc-7c717fbc-2"] {
    content: "dBJXyu,"
  }

  /*!sc*/
  .fALaGT {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    position: relative;
    gap: 20px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .fALaGT {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g280[id="sc-7c717fbc-3"] {
    content: "fALaGT,"
  }

  /*!sc*/
  .iGtvjG {
    width: 100%;
    overflow-x: hidden;
    -webkit-scroll-behavior: smooth;
    -moz-scroll-behavior: smooth;
    -ms-scroll-behavior: smooth;
    scroll-behavior: smooth;
    margin-top: 12px;
  }

  /*!sc*/
  .iGtvjG::-webkit-scrollbar {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .iGtvjG {
      margin-top: 0;
      width: calc(100% + 20px);
      overflow-x: scroll;
    }
  }

  /*!sc*/
  data-styled.g282[id="sc-e129733b-0"] {
    content: "iGtvjG,"
  }

  /*!sc*/
  .gvraxT {
    display: grid;
    grid-template-columns: repeat(6, calc(24.5% - 17px));
    grid-column-gap: 16px;
    -webkit-transition: -webkit-transform 0.5s ease;
    -webkit-transition: transform 0.5s ease;
    transition: transform 0.5s ease;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gvraxT {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      gap: 8px;
      -webkit-box-pack: start;
      -webkit-justify-content: start;
      -ms-flex-pack: start;
      justify-content: start;
      width: -webkit-fit-content;
      width: -moz-fit-content;
      width: fit-content;
      width: -webkit-fit-content;
    }
  }

  /*!sc*/
  data-styled.g283[id="sc-e129733b-1"] {
    content: "gvraxT,"
  }

  /*!sc*/
  .eqaeO {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 8px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%);
    z-index: 1;
  }

  /*!sc*/
  .eqaeO:hover {
    background: none;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .eqaeO {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g284[id="sc-e129733b-2"] {
    content: "eqaeO,"
  }

  /*!sc*/
  .gzjInt {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    aspect-ratio: 259 / 391;
    padding: 114px 48px 114px 47px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 8px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%), url(https://images.wanderon.in/mice-images-collection/japan-trip?updatedAt=1701069889216);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
  }

  /*!sc*/
  .gzjInt video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gzjInt video {
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gzjInt {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100px;
      aspect-ratio: 100 / 120;
      padding: 8px 8px 6px 8px;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: stretch;
      -webkit-justify-content: stretch;
      -ms-flex-pack: stretch;
      justify-content: stretch;
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      border-radius: 6px;
      background: #F2FDFF;
      background-image: none;
    }

    .gzjInt:last-child {
      margin-right: 20px;
    }
  }

  /*!sc*/
  .fqlNPr {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    aspect-ratio: 259 / 391;
    padding: 114px 48px 114px 47px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 8px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%), url(https://images.wanderon.in/new-homepage-data/Hero Section/romantic-thumbnails);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
  }

  /*!sc*/
  .fqlNPr video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .fqlNPr video {
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .fqlNPr {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100px;
      aspect-ratio: 100 / 120;
      padding: 8px 8px 6px 8px;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: stretch;
      -webkit-justify-content: stretch;
      -ms-flex-pack: stretch;
      justify-content: stretch;
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      border-radius: 6px;
      background: #F2FDFF;
      background-image: none;
    }

    .fqlNPr:last-child {
      margin-right: 20px;
    }
  }

  /*!sc*/
  .hxsxuD {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    aspect-ratio: 259 / 391;
    padding: 114px 48px 114px 47px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 8px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%), url(https://images.wanderon.in/new-homepage-data/Hero Section/International-thumbnail);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
  }

  /*!sc*/
  .hxsxuD video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .hxsxuD video {
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .hxsxuD {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100px;
      aspect-ratio: 100 / 120;
      padding: 8px 8px 6px 8px;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: stretch;
      -webkit-justify-content: stretch;
      -ms-flex-pack: stretch;
      justify-content: stretch;
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      border-radius: 6px;
      background: #F2FDFF;
      background-image: none;
    }

    .hxsxuD:last-child {
      margin-right: 20px;
    }
  }

  /*!sc*/
  .hrlFlm {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    aspect-ratio: 259 / 391;
    padding: 114px 48px 114px 47px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 8px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%), url(https://images.wanderon.in/new-homepage-data/Hero Section/India-explore-thumbnail);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
  }

  /*!sc*/
  .hrlFlm video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .hrlFlm video {
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .hrlFlm {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100px;
      aspect-ratio: 100 / 120;
      padding: 8px 8px 6px 8px;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: stretch;
      -webkit-justify-content: stretch;
      -ms-flex-pack: stretch;
      justify-content: stretch;
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      border-radius: 6px;
      background: #F2FDFF;
      background-image: none;
    }

    .hrlFlm:last-child {
      margin-right: 20px;
    }
  }

  /*!sc*/
  .dKdRdi {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    aspect-ratio: 259 / 391;
    padding: 114px 48px 114px 47px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 8px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%), url(https://images.wanderon.in/new-homepage-data/Hero Section/weekend-thumbnail);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
  }

  /*!sc*/
  .dKdRdi video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .dKdRdi video {
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .dKdRdi {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100px;
      aspect-ratio: 100 / 120;
      padding: 8px 8px 6px 8px;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: stretch;
      -webkit-justify-content: stretch;
      -ms-flex-pack: stretch;
      justify-content: stretch;
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      border-radius: 6px;
      background: #F2FDFF;
      background-image: none;
    }

    .dKdRdi:last-child {
      margin-right: 20px;
    }
  }

  /*!sc*/
  .htKmHx {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    aspect-ratio: 259 / 391;
    padding: 114px 48px 114px 47px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 8px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%), url(https://images.wanderon.in/new-homepage-data/Hero Section/group-thumbnails);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
  }

  /*!sc*/
  .htKmHx video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .htKmHx video {
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .htKmHx {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100px;
      aspect-ratio: 100 / 120;
      padding: 8px 8px 6px 8px;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: stretch;
      -webkit-justify-content: stretch;
      -ms-flex-pack: stretch;
      justify-content: stretch;
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      border-radius: 6px;
      background: #F2FDFF;
      background-image: none;
    }

    .htKmHx:last-child {
      margin-right: 20px;
    }
  }

  /*!sc*/
  data-styled.g285[id="sc-e129733b-3"] {
    content: "gzjInt,fqlNPr,hxsxuD,hrlFlm,dKdRdi,htKmHx,"
  }

  /*!sc*/
  .ivMtrg {
    border-radius: 6px;
    background: url();
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    aspect-ratio: 84 / 64;
    margin-bottom: 6px;
    position: relative;
  }

  /*!sc*/
  .ivMtrg img {
    border-radius: 6px;
    width: 100%;
    aspect-ratio: 84 / 64;
    object-fit: cover;
  }

  /*!sc*/
  @media screen and (min-width:768px) {
    .ivMtrg {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g286[id="sc-e129733b-4"] {
    content: "ivMtrg,"
  }

  /*!sc*/
  .DsgGE {
    width: 100%;
    margin-top: auto;
    margin-bottom: auto;
    color: #2D2D2D;
    text-align: center;
    font-size: 12px;
    font-style: normal;
    font-weight: 500;
    line-height: 16px;
  }

  /*!sc*/
  @media screen and (min-width:768px) {
    .DsgGE {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g287[id="sc-e129733b-5"] {
    content: "DsgGE,"
  }

  /*!sc*/
  .kUzWnY {
    width: 164px;
    aspect-ratio: 1/1;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    place-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    z-index: 2;
    background: url(https://images.wanderon.in/new-homepage-data/assets/ellipse);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-backdrop-filter: blur(2px);
    backdrop-filter: blur(2px);
  }

  /*!sc*/
  .kUzWnY img {
    object-fit: cover;
  }

  /*!sc*/
  .kUzWnY h3 {
    width: 80%;
    text-align: center;
    color: #fff;
    text-align: center;
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: 140%;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .kUzWnY {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g288[id="sc-e129733b-6"] {
    content: "kUzWnY,"
  }

  /*!sc*/
  .grekPt {
    margin: 90px 0 0 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .grekPt {
      margin: 40px 0 0 0;
    }
  }

  /*!sc*/
  .XwQaR {
    margin: 90px 0 0 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .XwQaR {
      margin: 0;
    }
  }

  /*!sc*/
  .iZoZUd {
    margin: 50px 0 0 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .iZoZUd {
      margin: 40px 0 0 0;
    }
  }

  /*!sc*/
  .dLxosh {
    margin: 30px 0 0 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .dLxosh {
      margin: 60px 0 0 0;
    }
  }

  /*!sc*/
  .isNFag {
    margin: 0 0 0 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .isNFag {
      margin: 40px 0 0 0;
    }
  }

  /*!sc*/
  data-styled.g289[id="sc-87e42e1e-0"] {
    content: "grekPt,XwQaR,iZoZUd,dLxosh,isNFag,"
  }

  /*!sc*/
  .cygIuh {
    height: 100%;
    background: linear-gradient(180deg, rgba(213, 247, 228, 0) 0%, rgba(255, 255, 236, 0) 0.52%, rgba(255, 248, 209, 0.8) 19.27%, rgba(255, 248, 209, 0.8) 88.54%, rgba(255, 255, 236, 0) 100%);
    width: calc(100% + 260px);
    padding: 60px 130px;
    margin: 0 0 0 -130px;
  }

  /*!sc*/
  @media screen and (min-width:1920px) {
    .cygIuh {
      width: calc(100% + 520px);
      margin: 0 0 0 -260px;
      padding: 60px 260px;
    }
  }

  /*!sc*/
  .cqxFaL {
    height: 100%;
    background: linear-gradient(180deg, rgba(255, 240, 231, 0.00) 0%, rgba(255, 232, 219, 0.80) 19.27%, rgba(255, 232, 219, 0.80) 88.54%, rgba(255, 240, 231, 0.00) 100%);
    width: calc(100% + 260px);
    padding: 60px 0px;
    margin: 0 0 0 0px;
  }

  /*!sc*/
  @media screen and (min-width:1920px) {
    .cqxFaL {
      width: calc(100% + 520px);
      padding: 60px 260px;
    }
  }

  /*!sc*/
  .jBFuPb {
    height: 100%;
    background: linear-gradient(180deg, rgba(223, 246, 255, 0.00) 0%, rgba(223, 246, 255, 0.80) 19.27%, rgba(223, 246, 255, 0.80) 88.54%, rgba(223, 246, 255, 0.00) 100%);
    width: calc(100% + 260px);
    padding: 60px 130px;
    margin: 0 0 0 -130px;
  }

  /*!sc*/
  @media screen and (min-width:1920px) {
    .jBFuPb {
      width: calc(100% + 520px);
      margin: 0 0 0 -260px;
      padding: 60px 260px;
    }
  }

  /*!sc*/
  data-styled.g290[id="sc-dc27d06c-0"] {
    content: "cygIuh,cqxFaL,jBFuPb,"
  }

  /*!sc*/
  .bogiOa {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    position: relative;
  }

  /*!sc*/
  data-styled.g291[id="sc-dc27d06c-1"] {
    content: "bogiOa,"
  }

  /*!sc*/
  .gSkxVB {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 12px;
    box-shadow: 0px 4px 6px 0px #fff;
    aspect-ratio: 1106 / 320;
    background-image: url(https://images.wanderon.in/new-homepage-data/Hero Section/international-thumbnail);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    padding: 30px;
    position: relative;
  }

  /*!sc*/
  .gSkxVB video {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 12px;
  }

  /*!sc*/
  .fybrgE {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 12px;
    box-shadow: 0px 4px 6px 0px #fff;
    aspect-ratio: 1106 / 320;
    background-image: url({{ Voyager::image(setting('site.image-bg-4')) }});
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    padding: 30px;
    position: relative;
  }

  /*!sc*/
  .fybrgE video {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 12px;
  }

  /*!sc*/
  .eONloK {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 12px;
    box-shadow: 0px 4px 6px 0px #fff;
    aspect-ratio: 1106 / 320;
    background-image: url(https://images.wanderon.in/new-homepage-data/Hero Section/romantic-thumbnail);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    padding: 30px;
    position: relative;
  }

  /*!sc*/
  .eONloK video {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 12px;
  }

  /*!sc*/
  data-styled.g292[id="sc-dc27d06c-2"] {
    content: "gSkxVB,fybrgE,eONloK,"
  }

  /*!sc*/
  .ffsgBj {
    position: absolute;
    z-index: 2;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: flex-start;
    -webkit-box-align: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    padding: 5% 0;
    gap: 40px;
    top: 0;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .ffsgBj {
      top: 0;
      gap: 24px;
      padding: 0;
    }
  }

  /*!sc*/
  data-styled.g293[id="sc-dc27d06c-3"] {
    content: "ffsgBj,"
  }

  /*!sc*/
  .ewuMOF {
    color: #fff;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    font-size: 48px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }

  /*!sc*/
  data-styled.g294[id="sc-dc27d06c-4"] {
    content: "ewuMOF,"
  }

  /*!sc*/
  .cONwrt {
    color: #f2f2f2;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-top: 6px;
  }

  /*!sc*/
  data-styled.g295[id="sc-dc27d06c-5"] {
    content: "cONwrt,"
  }

  /*!sc*/
  .cTzBtm {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 10px 1%;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: flex-start;
    -webkit-box-align: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    gap: 16px;
    overflow-x: hidden;
    -webkit-scroll-behavior: smooth;
    -moz-scroll-behavior: smooth;
    -ms-scroll-behavior: smooth;
    scroll-behavior: smooth;
    width: calc(100% - 50px);
    z-index: 2;
    position: relative;
    margin-top: -6%;
    -webkit-scroll-snap-type: x mandatory;
    -moz-scroll-snap-type: x mandatory;
    -ms-scroll-snap-type: x mandatory;
    scroll-snap-type: x mandatory;
  }

  /*!sc*/
  .cTzBtm::-webkit-scrollbar {
    display: none;
  }

  /*!sc*/
  data-styled.g296[id="sc-dc27d06c-6"] {
    content: "cTzBtm,"
  }

  /*!sc*/
  .fAPovW {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 16px;
    width: 100%;
    -webkit-transition: -webkit-transform 0.5s ease;
    -webkit-transition: transform 0.5s ease;
    transition: transform 0.5s ease;
  }

  /*!sc*/
  data-styled.g297[id="sc-dc27d06c-7"] {
    content: "fAPovW,"
  }

  /*!sc*/
  .gMLzxZ {
    width: calc(20% - 12px);
    aspect-ratio: 200 / 262;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 11px;
    border: 3px solid #fff;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.9) 100%), url(), lightgray 50% / cover no-repeat;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
  }

  /*!sc*/
  .gMLzxZ img {
    width: 100%;
    border-radius: 9px;
    object-fit: cover;
  }

  /*!sc*/
  data-styled.g298[id="sc-dc27d06c-8"] {
    content: "gMLzxZ,"
  }

  /*!sc*/
  .gUeTQG {
    height: 33.3px;
    margin-left: 15px;
    fill: white;
    cursor: pointer;
    background: #01afd1;
    border-radius: 200px;
    position: absolute;
    right: 1px;
    top: 45%;
    z-index: 2;
  }

  /*!sc*/
  .gUeTQG:hover {
    opacity: 0.9;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gUeTQG {
      display: block;
    }
  }

  data-styled.g297[id="sc-dc27d06c-7"] {
    content: "fAPovW,"
  }

  /*!sc*/
  .gMLzxZ {
    width: calc(20% - 12px);
    aspect-ratio: 200 / 262;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 11px;
    border: 3px solid #fff;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.9) 100%), url(), lightgray 50% / cover no-repeat;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
  }

  /*!sc*/
  .gMLzxZ img {
    width: 100%;
    border-radius: 9px;
    object-fit: cover;
  }

  /*!sc*/
  data-styled.g298[id="sc-dc27d06c-8"] {
    content: "gMLzxZ,"
  }

  /*!sc*/
  .gUeTQG {
    height: 33.3px;
    margin-left: 15px;
    fill: white;
    cursor: pointer;
    background: #01afd1;
    border-radius: 200px;
    position: absolute;
    right: 1px;
    top: 45%;
    z-index: 2;
  }

  /*!sc*/
  .gUeTQG:hover {
    opacity: 0.9;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gUeTQG {
      display: block;
    }
  }

  /*!sc*/
  .ejBIuH {
    height: 33.3px;
    margin-left: 15px;
    fill: white;
    cursor: pointer;
    background: #01afd1;
    border-radius: 200px;
    position: absolute;
    right: 1px;
    top: 45%;
    z-index: 2;
    top: 45%;
    right: -8px;
  }

  /*!sc*/
  .ejBIuH:hover {
    opacity: 0.9;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .ejBIuH {
      display: block;
      display: none;
    }
  }

  /*!sc*/
  data-styled.g299[id="sc-dc27d06c-9"] {
    content: "gUeTQG,ejBIuH,"
  }

  /*!sc*/
  .pDMnH {
    height: 33.3px;
    margin-right: 15px;
    fill: #757575;
    cursor: pointer;
    background: #E5E5E5;
    border-radius: 200px;
    justify-self: flex-end;
    position: absolute;
    left: 0;
    top: 45%;
    z-index: 2;
  }

  /*!sc*/
  .pDMnH:hover {
    opacity: 0.9;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .pDMnH {
      display: block;
    }
  }

  /*!sc*/
  .kXdZHv {
    height: 33.3px;
    margin-right: 15px;
    fill: white;
    cursor: pointer;
    background: #01afd1;
    border-radius: 200px;
    justify-self: flex-end;
    position: absolute;
    left: 0;
    top: 45%;
    z-index: 2;
    top: 45%;
    left: -17px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .kXdZHv {
      display: none;
    }
  }

  /*!sc*/
  .kXdZHv:hover {
    opacity: 0.9;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .kXdZHv {
      display: block;
      display: none;
    }
  }

  /*!sc*/
  data-styled.g300[id="sc-dc27d06c-10"] {
    content: "pDMnH,kXdZHv,"
  }

  /*!sc*/
  .knoAqO {
    position: absolute;
    top: 0;
    right: 0;
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 66.13%);
    width: 100%;
    height: 100%;
    z-index: 1;
    border-radius: 12px;
  }

  /*!sc*/
  data-styled.g301[id="sc-dc27d06c-11"] {
    content: "knoAqO,"
  }

  /*!sc*/
  .cceWAy {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    cursor: pointer;
    padding: 12px 60px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 10px;
    margin: 0;
    border-radius: 8px;
    background: #FEE60B;
    box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.14) inset;
    color: #000;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    -webkit-letter-spacing: 0.7px;
    -moz-letter-spacing: 0.7px;
    -ms-letter-spacing: 0.7px;
    letter-spacing: 0.7px;
    width: 100%;
  }

  /*!sc*/
  .cceWAy:hover {
    opacity: 0.8;
    -webkit-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out;
  }

  /*!sc*/
  .gdJcYW {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    cursor: pointer;
    padding: 10px 26px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 10px;
    margin: 0;
    border-radius: 24px;
    background: #FEE60B;
    box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.14) inset;
    color: #000;
    font-size: 12px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    -webkit-letter-spacing: 0.7px;
    -moz-letter-spacing: 0.7px;
    -ms-letter-spacing: 0.7px;
    letter-spacing: 0.7px;
    width: 100%;
  }

  /*!sc*/
  .gdJcYW:hover {
    opacity: 0.8;
    -webkit-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out;
  }

  /*!sc*/
  data-styled.g302[id="sc-15ffb5a6-0"] {
    content: "cceWAy,gdJcYW,"
  }

  /*!sc*/
  .gXaokw {
    width: 100%;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    background: rgba(0, 0, 0, 0.8);
    position: absolute;
    bottom: 0;
    padding: 15px;
    border-radius: 0 0 12px 12px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 9px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  /*!sc*/
  .gXaokw h3 {
    color: #fff;
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }

  /*!sc*/
  .gXaokw p {
    color: #dfdfdf;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  /*!sc*/
  @media screen and (min-width:600px) {
    .gXaokw {
      background: transparent;
      text-align: center;
      padding: 0;
      bottom: -10px;
    }

    .gXaokw h3 {
      color: #fbfbfb;
      font-size: 28px;
      font-style: normal;
      font-weight: 700;
      line-height: 100%;
    }

    .gXaokw p {
      color: #dedede;
      font-size: 14px;
      font-style: normal;
      font-weight: 500;
      line-height: 21px;
    }

    @media screen and (min-width:600px) and (max-width:1320px) {
      .gXaokw {
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content;
        bottom: 10px;
      }

      .gXaokw h3 {
        color: #fbfbfb;
        text-shadow: 1px 1px 25px rgba(0, 0, 0, 0.5);
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
      }

      .gXaokw p {
        color: var(--primitive-color-grey-grey-5, #dedede);
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: 21px;
      }
    }
  }

  /*!sc*/
  data-styled.g306[id="sc-afb16914-3"] {
    content: "gXaokw,"
  }

  /*!sc*/
  .gxWvXJ {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gxWvXJ {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: calc(100% + 40px);
      margin-left: -20px;
      margin: 50px 0 0 -20px;
      background: linear-gradient(180deg, rgba(213, 247, 228, 0) 0%, rgba(255, 255, 236, 0) 0.52%, rgba(255, 248, 209, 0.8) 19.27%, rgba(255, 248, 209, 0.8) 88.54%, rgba(255, 255, 236, 0) 100%);
      padding: 10px;
      height: 100%;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }
  }

  /*!sc*/
  .yZehz {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .yZehz {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: calc(100% + 40px);
      margin-left: -20px;
      margin: 50px 0 0 -20px;
      background: linear-gradient(180deg, rgba(255, 240, 231, 0.00) 0%, rgba(255, 232, 219, 0.80) 19.27%, rgba(255, 232, 219, 0.80) 88.54%, rgba(255, 240, 231, 0.00) 100%);
      padding: 10px;
      height: 100%;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }
  }

  /*!sc*/
  .jQESOL {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .jQESOL {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: calc(100% + 40px);
      margin-left: -20px;
      margin: 50px 0 0 -20px;
      background: linear-gradient(180deg, rgba(223, 246, 255, 0.00) 0%, rgba(223, 246, 255, 0.80) 19.27%, rgba(223, 246, 255, 0.80) 88.54%, rgba(223, 246, 255, 0.00) 100%);
      padding: 10px;
      height: 100%;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }
  }

  /*!sc*/
  data-styled.g307[id="sc-1710bb58-0"] {
    content: "gxWvXJ,yZehz,jQESOL,"
  }

  /*!sc*/
  .cMwhua {
    position: relative;
    width: 100vw;
    height: 120px;
    aspect-ratio: 390 / 120;
    margin-left: -10px;
    margin-bottom: 30px;
  }

  /*!sc*/
  .cMwhua img {
    object-fit: cover;
    aspect-ratio: 390 / 120;
    width: 100vw;
  }

  /*!sc*/
  data-styled.g308[id="sc-1710bb58-1"] {
    content: "cMwhua,"
  }

  /*!sc*/
  .gVeUAr {
    color: #2D2D2D;
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    padding: 10px 20px;
    position: absolute;
    bottom: 0;
  }

  /*!sc*/
  data-styled.g309[id="sc-1710bb58-2"] {
    content: "gVeUAr,"
  }

  /*!sc*/
  .jjRatB {
    width: 100%;
    overflow: hidden;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  /*!sc*/
  data-styled.g310[id="sc-1710bb58-3"] {
    content: "jjRatB,"
  }

  /*!sc*/
  .jnxOoP {
    margin-top: 90px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    gap: 20px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .jnxOoP {
      display: block;
      margin-top: 40px;
    }
  }

  /*!sc*/
  data-styled.g311[id="sc-d305777b-0"] {
    content: "jnxOoP,"
  }

  /*!sc*/
  .ihtoog {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 10px;
    z-index: 3;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 10px;
  }

  /*!sc*/
  data-styled.g312[id="sc-d305777b-1"] {
    content: "ihtoog,"
  }

  /*!sc*/
  .gVbpic {
    color: #2D2D2D;
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: 36px;
    text-align: center;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gVbpic {
      color: #2D2D2D;
      font-size: 16px;
      font-style: normal;
      font-weight: 700;
      line-height: 16px;
      -webkit-letter-spacing: 0.4px;
      -moz-letter-spacing: 0.4px;
      -ms-letter-spacing: 0.4px;
      letter-spacing: 0.4px;
    }
  }

  /*!sc*/
  data-styled.g313[id="sc-d305777b-2"] {
    content: "gVbpic,"
  }

  /*!sc*/
  .czkdKA {
    color: #757575;
    text-align: center;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: 21px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .czkdKA {
      text-align: center;
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: 15.6px;
    }
  }

  /*!sc*/
  data-styled.g314[id="sc-d305777b-3"] {
    content: "czkdKA,"
  }

  /*!sc*/
  .idkHCH {
    position: relative;
  }

  /*!sc*/
  data-styled.g317[id="sc-9f6c54f5-0"] {
    content: "idkHCH,"
  }

  /*!sc*/
  .gTYBfA {
    display: grid;
    grid-template-columns: repeat(16, 24.3%);
    grid-auto-flow: column;
    gap: 10px;
    overflow: scroll;
    z-index: 5;
  }

  /*!sc*/
  .gTYBfA::-webkit-scrollbar {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gTYBfA {
      grid-template-columns: repeat(16, 75%);
    }
  }

  /*!sc*/
  data-styled.g318[id="sc-9f6c54f5-1"] {
    content: "gTYBfA,"
  }

  /*!sc*/
  .joLgbM {
    width: 100%;
    height: 102px;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    background-color: #fff;
    position: absolute;
    z-index: 2;
    border-radius: 50%;
    border-radius: 50% / 40%;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    top: -80px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .joLgbM {
      top: -10px;
      height: 20px;
    }
  }

  /*!sc*/
  .gurywD {
    width: 100%;
    height: 102px;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    background-color: #fff;
    position: absolute;
    z-index: 2;
    border-radius: 50%;
    border-radius: 50% / 40%;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    bottom: -70px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gurywD {
      bottom: -10px;
      height: 20px;
    }
  }

  /*!sc*/
  data-styled.g319[id="sc-9f6c54f5-2"] {
    content: "joLgbM,gurywD,"
  }

  /*!sc*/
  .faJgdj {
    width: 100%;
    aspect-ratio: 270 / 400;
    position: relative;
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
  }

  /*!sc*/
  .faJgdj img {
    width: 100%;
    aspect-ratio: 270 / 400;
    object-fit: cover;
  }

  /*!sc*/
  data-styled.g321[id="sc-9f6c54f5-4"] {
    content: "faJgdj,"
  }

  /*!sc*/
  .dYEEaJ {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 2px 6px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 4px;
    border-radius: 24px;
    border: 0.5px solid #202020;
    background: rgba(32, 32, 32, 0.7);
    position: absolute;
    left: 12px;
    bottom: 55px;
  }

  /*!sc*/
  .dYEEaJ p {
    color: #fbfbfb;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
    -webkit-letter-spacing: 0.25px;
    -moz-letter-spacing: 0.25px;
    -ms-letter-spacing: 0.25px;
    letter-spacing: 0.25px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .dYEEaJ {
      bottom: 20px;
    }

    .dYEEaJ p {
      font-size: 12px;
    }

    .dYEEaJ svg {
      height: 14px;
    }
  }

  /*!sc*/
  data-styled.g322[id="sc-9f6c54f5-5"] {
    content: "dYEEaJ,"
  }

  /*!sc*/
  .bnNZyF {
    width: 100%;
    position: relative;
    aspect-ratio: 1046 / 300;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    position: relative;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 0;
    border-radius: 6px;
    box-shadow: rgba(0, 0, 0, 0.1) 4px 4px 16px;
  }

  /*!sc*/
  .bnNZyF:hover {
    cursor: pointer;
  }

  /*!sc*/
  .bnNZyF img {
    object-fit: cover;
    border-radius: 7px;
  }

  /*!sc*/
  @media (max-width:768px) {
    .bnNZyF {
      aspect-ratio: 358 / 150;
      margin-top: 0;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  }

  /*!sc*/
  @media (min-width:1520px) {}

  /*!sc*/
  data-styled.g323[id="sc-a3462846-0"] {
    content: "bnNZyF,"
  }

  /*!sc*/
  .rIwoT {
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    position: relative;
    overflow: hidden;
    z-index: 2;
    border-radius: 6px;
  }

  /*!sc*/
  data-styled.g324[id="sc-a3462846-1"] {
    content: "rIwoT,"
  }

  /*!sc*/
  .gNgKkS {
    position: absolute;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
    -webkit-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
    background: url();
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0;
    z-index: 10;
    opacity: 1;
    padding-bottom: 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gNgKkS {
      background: url();
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }
  }

  /*!sc*/
  .leOOFQ {
    position: absolute;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
    -webkit-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
    background: url();
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .leOOFQ {
      background: url();
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }
  }

  /*!sc*/
  data-styled.g325[id="sc-a3462846-2"] {
    content: "gNgKkS,leOOFQ,"
  }

  /*!sc*/
  .bEhDCZ {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 20px;
    position: relative;
  }

  /*!sc*/
  data-styled.g326[id="sc-a3462846-3"] {
    content: "bEhDCZ,"
  }

  /*!sc*/
  .kWbYkN {
    background-color: #01afd1;
    z-index: 30;
    position: absolute;
    height: 2vw;
    width: 2vw;
    left: -10px;
    border-radius: 100%;
  }

  /*!sc*/
  .kWbYkN :hover {
    opacity: 0.8;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .kWbYkN {
      display: none;
    }
  }

  /*!sc*/
  .hgJEtZ {
    background-color: #01afd1;
    z-index: 30;
    position: absolute;
    height: 2vw;
    width: 2vw;
    right: -10px;
    border-radius: 100%;
  }

  /*!sc*/
  .hgJEtZ :hover {
    opacity: 0.8;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .hgJEtZ {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g327[id="sc-a3462846-4"] {
    content: "kWbYkN,hgJEtZ,"
  }

  /*!sc*/
  .ezbpip {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: 100%;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 10px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .ezbpip {
      gap: 0;
    }
  }

  /*!sc*/
  data-styled.g328[id="sc-a3462846-5"] {
    content: "ezbpip,"
  }

  /*!sc*/
  .iXKYko {
    cursor: pointer;
    border-radius: 50%;
    padding: 5% 5%;
    position: relative;
    height: 12px;
    width: 12px;
    background-color: #d9d9d9;
    height: 8px;
    width: 8px;
    background: #015f74;
  }

  /*!sc*/
  @media (max-width:769px) {
    .iXKYko {
      display: none;
      padding: 5px;
      padding: 1px;
    }
  }

  /*!sc*/
  @media (min-width:1920px) {
    .iXKYko {
      padding: 7% 7%;
      margin: 5px;
    }
  }

  /*!sc*/
  .kHlLOB {
    cursor: pointer;
    border-radius: 50%;
    padding: 5% 5%;
    position: relative;
    height: 12px;
    width: 12px;
    background-color: #d9d9d9;
    height: 8px;
    width: 8px;
  }

  /*!sc*/
  @media (max-width:769px) {
    .kHlLOB {
      display: none;
      padding: 5px;
      padding: 1px;
    }
  }

  /*!sc*/
  @media (min-width:1920px) {
    .kHlLOB {
      padding: 7% 7%;
      margin: 5px;
    }
  }

  /*!sc*/
  data-styled.g335[id="sc-a0f7fbb3-6"] {
    content: "iXKYko,kHlLOB,"
  }

  /*!sc*/
  .iXBetg {
    margin: 30px 0 0 0;
  }

  /*!sc*/
  @media screen and (min-width:468px) and (max-width:768px) {
    .iXBetg {
      margin: 30px 0 0 0;
    }
  }

  /*!sc*/
  @media screen and (max-width:468px) {
    .iXBetg {
      margin-top: 30px;
      margin-top: 18px;
    }
  }

  /*!sc*/
  data-styled.g337[id="sc-dea65784-0"] {
    content: "iXBetg,"
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .KxrUR {
      display: grid;
      grid-template-columns: 2fr 7fr 2fr;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }
  }

  /*!sc*/
  data-styled.g338[id="sc-dea65784-1"] {
    content: "KxrUR,"
  }

  /*!sc*/
  @media screen and (min-width:600px) {
    .gVgBLA {
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gVgBLA {
      height: 33.3px;
      margin-right: 15px;
      fill: white;
      cursor: pointer;
      background: #01afd1;
      border-radius: 200px;
      justify-self: flex-end;
    }

    .gVgBLA:hover {
      -webkit-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
    }
  }

  /*!sc*/
  data-styled.g339[id="sc-dea65784-2"] {
    content: "gVgBLA,"
  }

  /*!sc*/
  @media screen and (min-width:600px) {
    .ekPGNJ {
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .ekPGNJ {
      height: 33.3px;
      margin-left: 15px;
      fill: white;
      cursor: pointer;
      background: #01afd1;
      border-radius: 200px;
    }

    .ekPGNJ:hover {
      -webkit-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
    }
  }

  /*!sc*/
  data-styled.g340[id="sc-dea65784-3"] {
    content: "ekPGNJ,"
  }

  /*!sc*/
  .cUXlwH {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .cUXlwH {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: space-around;
      -webkit-justify-content: space-around;
      -ms-flex-pack: space-around;
      justify-content: space-around;
      width: 30vw;
      margin: 8px auto;
    }
  }

  /*!sc*/
  data-styled.g341[id="sc-dea65784-4"] {
    content: "cUXlwH,"
  }

  /*!sc*/
  .cxwJoJ {
    height: 1vw;
    width: 1vw;
    background-color: #015f74;
    border-radius: 200px;
  }

  /*!sc*/
  .nSNNQ {
    height: 1vw;
    width: 1vw;
    background-color: #9e9e9e;
    border-radius: 200px;
  }

  /*!sc*/
  data-styled.g342[id="sc-dea65784-5"] {
    content: "cxwJoJ,nSNNQ,"
  }

  /*!sc*/
  .dhjVRE {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .dhjVRE {
      width: 60vw;
      overflow-y: hidden;
      overflow-x: hidden;
    }
  }

  /*!sc*/
  data-styled.g343[id="sc-dea65784-6"] {
    content: "dhjVRE,"
  }

  /*!sc*/
  @media screen and (min-width:469px) {
    .jbIGue {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      gap: 20px;
    }
  }

  /*!sc*/
  @media screen and (min-width:600px) and (max-width:768px) {
    .jbIGue {
      grid-template-columns: 1fr 1fr;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .jbIGue {
      width: 60vw;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-scroll-behavior: smooth;
      -moz-scroll-behavior: smooth;
      -ms-scroll-behavior: smooth;
      scroll-behavior: smooth;
      -webkit-scroll-snap-type: x mandatory;
      -moz-scroll-snap-type: x mandatory;
      -ms-scroll-snap-type: x mandatory;
      scroll-snap-type: x mandatory;
      overflow-x: scroll;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-transition: all 0.4s;
      transition: all 0.4s;
    }

    .jbIGue::-webkit-scrollbar {
      display: none;
    }
  }

  /*!sc*/
  data-styled.g344[id="sc-dea65784-7"] {
    content: "jbIGue,"
  }

  /*!sc*/
  .jeDmNW {
    height: 350px;
    z-index: 2;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: flex-start;
    -webkit-box-align: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    gap: 16px;
    padding: 25px 18px 25px 25px;
    -webkit-scroll-snap-stop: always;
    -moz-scroll-snap-stop: always;
    -ms-scroll-snap-stop: always;
    scroll-snap-stop: always;
    -webkit-scroll-snap-align: start;
    -moz-scroll-snap-align: start;
    -ms-scroll-snap-align: start;
    scroll-snap-align: start;
    border: 1px solid #015f74;
    box-shadow: 0px 4px 34px rgba(0, 0, 0, 0.1);
    border-radius: 16px;
    position: relative;
  }

  /*!sc*/
  .jeDmNW img {
    object-fit: cover;
    z-index: -1;
    border-radius: 16px;
  }

  /*!sc*/
  @media screen and (min-width:469px) and (max-width:768px) {
    .jeDmNW img {
      object-fit: contain;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .jeDmNW {
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      margin-bottom: 8px;
      padding: 25px 16px 0 16px;
      width: 60vw;
      margin-left: 20px;
      gap: 16px;
      height: 323px;
      box-shadow: none;
    }
  }

  /*!sc*/
  @media (min-width:600px) and (max-width:769px) {
    .jeDmNW {
      height: 250px;
      padding: 15px 8px 15px 15px;
    }

    .jeDmNW:hover {
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
      -webkit-transition: none;
      transition: none;
    }
  }

  /*!sc*/
  @media screen and (min-width:768px) and (max-width:1024px) {
    .jeDmNW {
      height: 300px;
    }
  }

  /*!sc*/
  @media (min-width:1620px) {
    .jeDmNW {
      height: 480px;
    }
  }

  /*!sc*/
  data-styled.g345[id="sc-dea65784-8"] {
    content: "jeDmNW,"
  }

  /*!sc*/
  .efrelH {
    font-weight: 700;
    font-size: 26px;
    line-height: 30px;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
    color: #01afd1;
    text-align: start;
    margin: 8px 0;
  }

  /*!sc*/
  @media screen and (min-width:1220px) and (max-width:1550px) {
    .efrelH {
      height: 70px;
    }
  }

  /*!sc*/
  @media screen and (min-width:768px) and (max-width:1220px) {
    .efrelH {
      font-size: 16px;
      line-height: 20px;
    }
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .efrelH {
      font-size: 16px;
    }
  }

  /*!sc*/
  @media (min-width:300px) and (max-width:769px) {
    .efrelH {
      font-size: 25.23px;
      line-height: 30.3px;
      font-weight: 700;
      margin: 0;
    }
  }

  /*!sc*/
  @media (min-width:1620px) {
    .efrelH {
      font-size: 40px;
      line-height: 50px;
    }
  }

  /*!sc*/
  data-styled.g347[id="sc-dea65784-10"] {
    content: "efrelH,"
  }

  /*!sc*/
  .cKGsPd {
    font-family: "Roboto";
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
    color: rgba(12, 12, 12, 0.75);
    text-align: start;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .cKGsPd {
      font-size: 14px;
      line-height: 142%;
    }
  }

  /*!sc*/
  @media (min-width:300px) and (max-width:769px) {
    .cKGsPd {
      font-size: 14px;
      line-height: 21px;
    }
  }

  /*!sc*/
  @media (min-width:768px) and (max-width:1220px) {
    .cKGsPd {
      font-size: 14px;
      line-height: 18px;
    }
  }

  /*!sc*/
  @media (min-width:1620px) {
    .cKGsPd {
      font-size: 20px;
      line-height: 30px;
    }
  }

  /*!sc*/
  data-styled.g348[id="sc-dea65784-11"] {
    content: "cKGsPd,"
  }

  /*!sc*/
  .duxrtH {
    width: 100%;
    margin-top: 45px;
    display: grid;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /*!sc*/
  @media screen and (min-width:768px) {
    .duxrtH {
      grid-template-columns: 1fr 3fr 1fr;
    }
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .duxrtH {
      display: block;
    }
  }

  /*!sc*/
  data-styled.g359[id="sc-7ce56fbe-0"] {
    content: "duxrtH,"
  }

  /*!sc*/
  .eHUIxo {
    height: 3vw;
    fill: white;
    cursor: pointer;
    background-color: #01afd1;
    border-radius: 200px;
    justify-self: flex-end;
    padding: 0.4vw;
    display: block;
    margin-right: 35px;
  }

  /*!sc*/
  @media only screen and (max-width:768px) {
    .eHUIxo {
      height: 7vw;
      display: none;
    }
  }

  /*!sc*/
  .eHUIxo:hover {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
  }

  /*!sc*/
  .eWfDNc {
    height: 3vw;
    fill: white;
    cursor: pointer;
    background-color: #01afd1;
    border-radius: 200px;
    justify-self: flex-end;
    padding: 0.4vw;
    display: none;
    margin-right: none;
  }

  /*!sc*/
  @media only screen and (max-width:768px) {
    .eWfDNc {
      height: 7vw;
      display: block;
    }
  }

  /*!sc*/
  .eWfDNc:hover {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
  }

  /*!sc*/
  data-styled.g360[id="sc-7ce56fbe-1"] {
    content: "eHUIxo,eWfDNc,"
  }

  /*!sc*/
  .fZjYIr {
    height: 3vw;
    fill: white;
    cursor: pointer;
    background-color: #01afd1;
    border-radius: 200px;
    padding: 0.4vw;
    display: block;
    margin-left: 35px;
  }

  /*!sc*/
  @media only screen and (max-width:768px) {
    .fZjYIr {
      height: 7vw;
      display: none;
    }
  }

  /*!sc*/
  .fZjYIr:hover {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
  }

  /*!sc*/
  .jCygKn {
    height: 3vw;
    fill: white;
    cursor: pointer;
    background-color: #01afd1;
    border-radius: 200px;
    padding: 0.4vw;
    display: none;
    margin-left: none;
  }

  /*!sc*/
  @media only screen and (max-width:768px) {
    .jCygKn {
      height: 7vw;
      display: block;
    }
  }

  /*!sc*/
  .jCygKn:hover {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
  }

  /*!sc*/
  data-styled.g361[id="sc-7ce56fbe-2"] {
    content: "fZjYIr,jCygKn,"
  }

  /*!sc*/
  .fwZuEs {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: space-around;
    -webkit-justify-content: space-around;
    -ms-flex-pack: space-around;
    justify-content: space-around;
    width: 10vw;
    margin: auto;
    margin-top: 24px;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .fwZuEs {
      width: 45vw;
      margin-top: 20px;
    }
  }

  /*!sc*/
  data-styled.g362[id="sc-7ce56fbe-3"] {
    content: "fwZuEs,"
  }

  /*!sc*/
  .dQBbIP {
    height: 8px;
    width: 8px;
    background-color: #015f74;
    border-radius: 1000px;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .dQBbIP {
      height: 1vw;
      width: 1vw;
    }
  }

  /*!sc*/
  .kngJLy {
    height: 8px;
    width: 8px;
    background-color: #9e9e9e;
    border-radius: 1000px;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .kngJLy {
      height: 1vw;
      width: 1vw;
    }
  }

  /*!sc*/
  data-styled.g363[id="sc-7ce56fbe-4"] {
    content: "dQBbIP,kngJLy,"
  }

  /*!sc*/
  .dTJoph {
    position: absolute;
    background: transparent;
    margin-top: 16px;
    left: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 8px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /*!sc*/
  data-styled.g364[id="sc-7ce56fbe-5"] {
    content: "dTJoph,"
  }

  /*!sc*/
  .kPMsDT {
    background: url();
    height: 50px;
    width: 50px;
    background-size: cover;
    border-radius: 50%;
    background-repeat: no-repeat;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .kPMsDT {
      height: 40px;
      width: 40px;
      background-size: contain;
      -webkit-align-self: flex-start;
      -ms-flex-item-align: start;
      align-self: flex-start;
    }
  }

  /*!sc*/
  data-styled.g365[id="sc-7ce56fbe-6"] {
    content: "kPMsDT,"
  }

  /*!sc*/
  .bHrjIc {
    font-family: "Roboto";
    font-style: normal;
    font-weight: 500;
    font-size: 19.2px;
    line-height: 27px;
    color: rgba(12, 12, 12, 0.9);
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .bHrjIc {
      font-weight: 500;
      font-size: 15.75px;
      line-height: 20px;
      width: 80%;
    }
  }

  /*!sc*/
  data-styled.g366[id="sc-7ce56fbe-7"] {
    content: "bHrjIc,"
  }

  /*!sc*/
  .ilzjOB {
    width: 51vw;
    overflow-y: hidden;
    overflow-x: hidden;
    background: rgba(1, 175, 209, 0.02);
    border: 1px solid #01afd1;
    box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.1);
    border-radius: 9px;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .ilzjOB {
      width: 80vw;
      width: 90vw;
    }
  }

  /*!sc*/
  data-styled.g367[id="sc-7ce56fbe-8"] {
    content: "ilzjOB,"
  }

  /*!sc*/
  .dfhBxd {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-scroll-behavior: smooth;
    -moz-scroll-behavior: smooth;
    -ms-scroll-behavior: smooth;
    scroll-behavior: smooth;
    -webkit-scroll-snap-type: x mandatory;
    -moz-scroll-snap-type: x mandatory;
    -ms-scroll-snap-type: x mandatory;
    scroll-snap-type: x mandatory;
    overflow-x: scroll;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    cursor: pointer;
  }

  /*!sc*/
  .dfhBxd::-webkit-scrollbar {
    display: none;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .dfhBxd {
      height: 77vw;
      fill: #ed462f;
    }
  }

  /*!sc*/
  data-styled.g368[id="sc-7ce56fbe-9"] {
    content: "dfhBxd,"
  }

  /*!sc*/
  .hzsqkx {
    position: relative;
    width: 49vw;
    aspect-ratio: 691/470;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 10px;
    overflow: hidden;
    margin: 1vw;
    -webkit-scroll-snap-stop: always;
    -moz-scroll-snap-stop: always;
    -ms-scroll-snap-stop: always;
    scroll-snap-stop: always;
    -webkit-scroll-snap-align: center;
    -moz-scroll-snap-align: center;
    -ms-scroll-snap-align: center;
    scroll-snap-align: center;
    padding-bottom: 10px;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .hzsqkx {
      width: 84vw;
      margin: 2vw;
      aspect-ratio: 334/276;
      margin-left: 2.7vw;
    }
  }

  /*!sc*/
  .kSXlYD {
    position: relative;
    width: 49vw;
    aspect-ratio: 691/470;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 10px;
    overflow: hidden;
    margin: 1vw;
    -webkit-scroll-snap-stop: always;
    -moz-scroll-snap-stop: always;
    -ms-scroll-snap-stop: always;
    scroll-snap-stop: always;
    -webkit-scroll-snap-align: center;
    -moz-scroll-snap-align: center;
    -ms-scroll-snap-align: center;
    scroll-snap-align: center;
    padding-bottom: 10px;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .kSXlYD {
      width: 84vw;
      margin: 2vw;
      aspect-ratio: 334/276;
    }
  }

  /*!sc*/
  .TuTVJ {
    position: relative;
    width: 49vw;
    aspect-ratio: 691/470;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 10px;
    overflow: hidden;
    margin: 1vw;
    -webkit-scroll-snap-stop: always;
    -moz-scroll-snap-stop: always;
    -ms-scroll-snap-stop: always;
    scroll-snap-stop: always;
    -webkit-scroll-snap-align: center;
    -moz-scroll-snap-align: center;
    -ms-scroll-snap-align: center;
    scroll-snap-align: center;
    padding-bottom: 10px;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .TuTVJ {
      width: 84vw;
      margin: 2vw;
      aspect-ratio: 334/276;
      margin-right: 2.7vw;
    }
  }

  /*!sc*/
  data-styled.g369[id="sc-7ce56fbe-10"] {
    content: "hzsqkx,kSXlYD,TuTVJ,"
  }

  /*!sc*/
  .knWnPG {
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%), ;
    z-index: 2;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: calc(100% - 70px);
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
    border-radius: 5px;
  }

  /*!sc*/
  .knWnPG:hover svg {
    fill: #ed462f;
  }

  /*!sc*/
  .knWnPG img {
    border-radius: 5px;
    object-fit: cover;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .knWnPG {
      width: 100%;
      aspect-ratio: 16/9;
    }
  }

  /*!sc*/
  data-styled.g371[id="sc-7ce56fbe-12"] {
    content: "knWnPG,"
  }

  /*!sc*/
  .kGNPfY {
    height: 7vw;
    z-index: 3;
    fill: #ed462f;
  }

  /*!sc*/
  .kGNPfY:hover {
    fill: #ed462f;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .kGNPfY {
      height: 15vw;
      fill: #ed462f;
    }
  }

  /*!sc*/
  data-styled.g372[id="sc-7ce56fbe-13"] {
    content: "kGNPfY,"
  }

  /*!sc*/
  .fssxPh {
    margin-top: 120px;
    margin-top: 90px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .fssxPh {
      margin-top: 80px;
      margin-top: 40px;
    }
  }

  /*!sc*/
  data-styled.g382[id="sc-69cb3cc5-0"] {
    content: "fssxPh,"
  }

  /*!sc*/
  .dwZrlZ {
    width: 100%;
    aspect-ratio: 1106 / 300;
    border-radius: var(--radius-small, 8px);
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 82%), url(../images.wanderon.in/new-homepage-data/cta%20homepage%20-%20desktop.png) lightgray 50% / cover no-repeat;
    z-index: 1;
    position: relative;
    padding: 0 80px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .dwZrlZ {
      width: calc(100% + 40px);
      border-radius: 0;
      margin-left: -20px;
      aspect-ratio: 390 / 180;
      background: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 82%), url(../images.wanderon.in/new-homepage-data/cta%20homepage%20-%20phone.jpg) lightgray 50% / cover no-repeat;
      padding: 0 20px;
    }
  }

  /*!sc*/
  data-styled.g395[id="sc-caaa3d1b-0"] {
    content: "dwZrlZ,"
  }

  /*!sc*/
  .hYfLOX {
    color: #fff;
    font-size: 28px;
    font-style: normal;
    font-weight: 800;
    line-height: 140%;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .hYfLOX {
      color: #fff;
      font-size: 18px;
      font-style: normal;
      font-weight: 700;
      line-height: 23.4px;
    }
  }

  /*!sc*/
  data-styled.g396[id="sc-caaa3d1b-1"] {
    content: "hYfLOX,"
  }

  /*!sc*/
  .ezusjD {
    color: #fff;
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 140%;
    margin-top: 6px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .ezusjD {
      color: #fff;
      font-size: 12px;
      font-style: normal;
      font-weight: 500;
      line-height: 13px;
    }
  }

  /*!sc*/
  data-styled.g397[id="sc-caaa3d1b-2"] {
    content: "ezusjD,"
  }

  /*!sc*/
  .yIbrY {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }

  /*!sc*/
  data-styled.g399[id="sc-4ebed66e-1"] {
    content: "yIbrY,"
  }

  /*!sc*/
  .gEZkwC {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 24px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .gEZkwC {
      gap: 8px;
    }
  }

  /*!sc*/
  data-styled.g400[id="sc-4ebed66e-2"] {
    content: "gEZkwC,"
  }

  /*!sc*/
  .yhGzR {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 10px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 10px;
    width: 100%;
  }

  /*!sc*/
  .yhGzR img {
    height: 400px;
    aspect-ratio: 1 / 1;
    object-fit: contain;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .yhGzR {
      padding: 3px;
      gap: 16px;
    }
  }

  /*!sc*/
  data-styled.g405[id="sc-4ebed66e-7"] {
    content: "yhGzR,"
  }

  /*!sc*/
  .ksmCeC {
    width: 100%;
    height: auto;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 12px;
    background: url();
    background-color: #01afd1;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.25);
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 32px 85px;
    margin-top: 90px;
    gap: 7.17vw;
  }

  /*!sc*/
  data-styled.g408[id="sc-f53a9740-0"] {
    content: "ksmCeC,"
  }

  /*!sc*/
  .jFKlVy {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 6px;
    border: 1px solid #01afd1;
    background: #fff;
    box-shadow: 0px 4px 20.6px 0px rgba(0, 0, 0, 0.1);
  }

  /*!sc*/
  @media screen and (min-width:1920px) {
    .jFKlVy {
      width: 100%;
    }
  }

  /*!sc*/
  @media (max-width:769px) {
    .jFKlVy {
      padding: 0px 0 10px 0;
      gap: 20px;
    }
  }

  /*!sc*/
  @media (max-width:360px) {
    .jFKlVy {
      gap: 0;
    }
  }

  /*!sc*/
  .jFKlVy p {
    font-size: 12px;
    line-height: 18px;
    color: #ff2e36;
    margin-top: 5px;
    width: 100%;
  }

  /*!sc*/
  .jFKlVy input {
    outline: none;
    display: block;
    background: #ffffff;
    border: 2px solid rgba(10, 158, 136, 0.9);
    border-radius: 10px;
    height: 48px;
    margin-top: 24px;
    padding: 0px 30px;
    font-weight: 400;
    font-size: 18px;
    line-height: 21px;
    width: 100%;
    padding-left: 60px;
    border: 1px solid #d1d1d1;
  }

  /*!sc*/
  .jFKlVy input::-webkit-outer-spin-button {
    display: none;
  }

  /*!sc*/
  .jFKlVy input::-webkit-inner-spin-button {
    display: none;
  }

  /*!sc*/
  .jFKlVy input::placeholder {
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 24px;
    color: rgba(0, 0, 0, 0.36);
  }

  /*!sc*/
  @media (max-width:769px) {
    .jFKlVy input::-webkit-input-placeholder {
      font-size: 15px;
      line-height: 18px;
    }

    .jFKlVy input::-moz-placeholder {
      font-size: 15px;
      line-height: 18px;
    }

    .jFKlVy input:-ms-input-placeholder {
      font-size: 15px;
      line-height: 18px;
    }

    .jFKlVy input::placeholder {
      font-size: 15px;
      line-height: 18px;
    }
  }

  /*!sc*/
  .jFKlVy input:focus,
  .jFKlVy input:hover {
    border: 1px solid#01AFD1;
  }

  /*!sc*/
  @media (max-width:769px) {
    .jFKlVy input {
      padding: 0 10px;
      width: 90%;
      height: 40px;
      font-size: 15px;
      line-height: 18px;
      margin-top: 20px;
      width: 100%;
      height: 48px;
      padding: 0 16px 0 40px;
      position: relative;
      border-radius: 8px;
      border: 1px solid #d1d1d1;
    }
  }

  /*!sc*/
  .jFKlVy textarea {
    outline: none;
    background: #ffffff;
    border: 2px solid rgba(10, 158, 136, 0.9);
    border-radius: 10px;
    resize: none;
    padding: 15px 30px;
    margin: 24px 0 10px 0px;
    font-weight: 400;
    font-size: 18px;
    line-height: 21px;
    width: 100%;
    padding-left: 60px;
    border: 1px solid #d1d1d1;
    height: auto;
    min-height: 85px;
  }

  /*!sc*/
  .jFKlVy textarea::placeholder {
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 24px;
    color: rgba(0, 0, 0, 0.36);
  }

  /*!sc*/
  @media (max-width:769px) {
    .jFKlVy textarea::-webkit-input-placeholder {
      font-size: 15px;
      line-height: 18px;
    }

    .jFKlVy textarea::-moz-placeholder {
      font-size: 15px;
      line-height: 18px;
    }

    .jFKlVy textarea:-ms-input-placeholder {
      font-size: 15px;
      line-height: 18px;
    }

    .jFKlVy textarea::placeholder {
      font-size: 15px;
      line-height: 18px;
    }
  }

  /*!sc*/
  .jFKlVy textarea:focus,
  .jFKlVy textarea:hover {
    border: 1px solid#01AFD1;
  }

  /*!sc*/
  @media (max-width:769px) {
    .jFKlVy textarea {
      display: none;
      padding: 10px 16px 0 40px;
      width: 100%;
      border-radius: 8px;
      border: 1px solid #d1d1d1;
    }
  }

  /*!sc*/
  .jFKlVy button {
    border: none;
    outline: none;
    width: 80%;
    height: 48px;
    background: #ff2e36;
    border-radius: 35px;
    font-size: 15.75px;
    font-style: normal;
    font-weight: 500;
    line-height: 20.475px;
    color: #ffffff;
    cursor: pointer;
    border-radius: 36px;
    background: #fee60b;
    color: rgba(12, 12, 12, 0.9);
    margin-bottom: 20px;
  }

  /*!sc*/
  .jFKlVy button:hover {
    opacity: 0.9;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .jFKlVy button {
      width: 70%;
      height: 45px;
      font-size: 18px;
      line-height: 21px;
      margin-bottom: 10px;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .jFKlVy button {
      font-size: 16px;
      width: 90%;
      margin-bottom: 10px;
    }
  }

  /*!sc*/
  data-styled.g417[id="sc-9aca41ef-0"] {
    content: "jFKlVy,"
  }

  /*!sc*/
  .dRHJLM {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 90px;
    width: 100%;
    padding: 0 0 0 10%;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 6px 6px 0px 0px;
    background: linear-gradient(0deg, #ecfcff 0%, #ecfcff 100%), #e4fff0;
  }

  /*!sc*/
  .dRHJLM img {
    position: absolute;
    top: -25px;
    left: 0;
  }

  /*!sc*/
  .dRHJLM .tagline {
    font-size: 17.2px;
    font-style: normal;
    font-weight: 500;
    line-height: 26.88px;
    -webkit-align-self: flex-start;
    -ms-flex-item-align: start;
    align-self: flex-start;
    color: #2d2d2d;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .dRHJLM .tagline {
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: 21px;
    }
  }

  /*!sc*/
  .dRHJLM .highlight {
    color: #01afd1;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .dRHJLM {
      padding: 0 0 0 5%;
      background-image: url("assets/svg/contact-form-heading.svg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  }

  /*!sc*/
  data-styled.g418[id="sc-9aca41ef-1"] {
    content: "dRHJLM,"
  }

  /*!sc*/
  .imRfCC {
    width: 80%;
    height: auto;
    padding: 0;
    position: relative;
    background-color: inherit;
    border-radius: 8px;
  }

  /*!sc*/
  .imRfCC input,
  .imRfCC textarea {
    font-size: 14px;
    font-family: "roboto";
  }

  /*!sc*/
  .imRfCC label {
    padding: 0 4px;
    top: 15px;
    left: 16px;
    z-index: 1;
    background-color: inherit;
    position: absolute;
    color: #121212;
    font-size: 13px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
  }

  /*!sc*/
  @media screen and (max-width:769px) {
    .imRfCC label {
      padding: 0 4px;
      top: 10px;
      left: 16px;
      z-index: 1;
      background-color: inherit;
      position: absolute;
      color: #121212;
      font-size: 13px;
      font-style: normal;
      font-weight: 400;
      line-height: 20px;
    }
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .imRfCC {
      width: 70%;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .imRfCC {
      width: 90%;
    }
  }

  /*!sc*/
  .bbshZI {
    width: 80%;
    height: auto;
    padding: 0;
    position: relative;
    background-color: inherit;
    border-radius: 8px;
    z-index: 2;
  }

  /*!sc*/
  .bbshZI input,
  .bbshZI textarea {
    font-size: 14px;
    font-family: "roboto";
  }

  /*!sc*/
  .bbshZI label {
    padding: 0 4px;
    top: 15px;
    left: 16px;
    z-index: 1;
    background-color: inherit;
    position: absolute;
    color: #121212;
    font-size: 13px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
  }

  /*!sc*/
  @media screen and (max-width:769px) {
    .bbshZI label {
      padding: 0 4px;
      top: 10px;
      left: 16px;
      z-index: 1;
      background-color: inherit;
      position: absolute;
      color: #121212;
      font-size: 13px;
      font-style: normal;
      font-weight: 400;
      line-height: 20px;
    }
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .bbshZI {
      width: 70%;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .bbshZI {
      width: 90%;
    }
  }

  /*!sc*/
  .cakytm {
    width: 80%;
    height: auto;
    padding: 0;
    position: relative;
    background-color: inherit;
    border-radius: 8px;
  }

  /*!sc*/
  .cakytm input,
  .cakytm textarea {
    font-size: 14px;
    font-family: "roboto";
  }

  /*!sc*/
  .cakytm label {
    padding: 0 4px;
    top: 15px;
    left: 16px;
    z-index: 1;
    background-color: inherit;
    position: absolute;
    color: #121212;
    font-size: 13px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
  }

  /*!sc*/
  @media screen and (max-width:769px) {
    .cakytm label {
      padding: 0 4px;
      top: 10px;
      left: 16px;
      z-index: 1;
      background-color: inherit;
      position: absolute;
      color: #121212;
      font-size: 13px;
      font-style: normal;
      font-weight: 400;
      line-height: 20px;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .cakytm {
      display: none;
    }
  }

  /*!sc*/
  .cakytm label {
    top: 14.5px;
  }

  /*!sc*/
  @media screen and (max-width:769px) {
    .cakytm label {
      top: 15px;
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .cakytm {
      width: 70%;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .cakytm {
      width: 90%;
    }
  }

  /*!sc*/
  data-styled.g419[id="sc-9aca41ef-2"] {
    content: "imRfCC,bbshZI,cakytm,"
  }

  /*!sc*/
  .kbSQJG {
    position: absolute;
    height: 20px;
    width: 20px;
    z-index: 1;
    top: 52%;
    left: 20px;
    background: url("assets/svg/input-icons/name.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .kbSQJG {
      height: 15px;
      width: 15px;
      bottom: 17px;
      left: 20px;
    }
  }

  /*!sc*/
  .UAiUV {
    position: absolute;
    height: 20px;
    width: 20px;
    z-index: 1;
    top: 52%;
    left: 20px;
    background: url("assets/svg/input-icons/phone.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .UAiUV {
      height: 15px;
      width: 15px;
      bottom: 17px;
      left: 20px;
    }
  }

  /*!sc*/
  .hhPdzt {
    position: absolute;
    height: 20px;
    width: 20px;
    z-index: 1;
    top: 52%;
    left: 20px;
    background: url("assets/svg/input-icons/email.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .hhPdzt {
      height: 15px;
      width: 15px;
      bottom: 17px;
      left: 20px;
    }
  }

  /*!sc*/
  .iKPboV {
    position: absolute;
    height: 20px;
    width: 20px;
    z-index: 1;
    top: 52%;
    left: 20px;
    background: url("assets/svg/input-icons/message-symbol.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    height: 22px;
    width: 22px;
    top: 43px;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .iKPboV {
      height: 15px;
      top: 36px;
      padding-left: 0;
    }
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .iKPboV {
      top: 36px;
      display: none;
    }
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .iKPboV {
      height: 15px;
      width: 15px;
      bottom: 17px;
      left: 20px;
    }
  }

  /*!sc*/
  data-styled.g420[id="sc-9aca41ef-3"] {
    content: "kbSQJG,UAiUV,hhPdzt,iKPboV,"
  }

  /*!sc*/
  .kNYlmB {
    width: 100%;
    height: calc(100vh - 200px);
    aspect-ratio: 398 / 1366;
    position: relative;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    background: rgba(0, 0, 0, 0.4);
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .kNYlmB {
      width: 100%;
      height: 27.25vh;
      position: relative;
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      background: rgba(0, 0, 0, 0.4);
      margin-top: 70px;
    }
  }

  /*!sc*/
  data-styled.g421[id="sc-d2d9d4f0-0"] {
    content: "kNYlmB,"
  }

  /*!sc*/
  .eKiASF {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /*!sc*/
  data-styled.g422[id="sc-d2d9d4f0-1"] {
    content: "eKiASF,"
  }

  /*!sc*/
  .bznoTk {
    position: absolute;
    top: 36%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    padding: 10px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 10px;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .bznoTk {
      position: absolute;
      top: 30%;
      bottom: 30%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      padding: 10px;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      gap: 10px;
      z-index: 20;
    }
  }

  /*!sc*/
  data-styled.g424[id="sc-d2d9d4f0-3"] {
    content: "bznoTk,"
  }

  /*!sc*/
  .effmtC {
    color: #fff;
    text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.8);
    font-size: 48px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .effmtC {
      color: #fff;
      text-align: center;
      text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.8);
      font-size: 22px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }
  }

  /*!sc*/
  data-styled.g425[id="sc-d2d9d4f0-4"] {
    content: "effmtC,"
  }

  /*!sc*/
  .bofJwu {
    color: #fee60b;
    text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.8);
    font-size: 32px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .bofJwu {
      color: #fee60b;
      text-align: center;
      text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.8);
      font-size: 18px;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
    }
  }

  /*!sc*/
  data-styled.g426[id="sc-d2d9d4f0-5"] {
    content: "bofJwu,"
  }

  /*!sc*/
  .IrZVQ {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 100%;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.3) 100%);
  }

  /*!sc*/
  data-styled.g427[id="sc-d2d9d4f0-6"] {
    content: "IrZVQ,"
  }

  /*!sc*/
  .cQECPc {
    color: white;
    font-weight: 700;
    font-size: 30px;
    line-height: 35px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  /*!sc*/
  @media screen and (max-width:768px) {
    .cQECPc {
      font-weight: 400;
      font-size: 18px;
      line-height: 21px;
    }
  }

  /*!sc*/
  data-styled.g428[id="sc-25ff2ed6-0"] {
    content: "cQECPc,"
  }

  /*!sc*/
  .cHEAaN {
    width: 100%;
    height: 80px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 3.3vw;
    background: #F2FDFF;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .cHEAaN {
      width: 100%;
      height: 54px;
      padding: 8px 5vw;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 4.1vw;
      background: #F2FDFF;
    }
  }

  /*!sc*/
  data-styled.g429[id="sc-5b5a5b73-0"] {
    content: "cHEAaN,"
  }

  /*!sc*/
  .hZiORX {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 6px;
  }

  /*!sc*/
  data-styled.g430[id="sc-5b5a5b73-1"] {
    content: "hZiORX,"
  }

  /*!sc*/
  .cMbEAU {
    width: 25px;
    height: 25px;
    background: url(../ik.imagekit.io/workcations/gallery/landing-pages/social/google.png);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  /*!sc*/
  @media screen and (min-width:600px) {
    .cMbEAU {
      height: 40px;
      width: 40px;
    }
  }

  /*!sc*/
  .fDNOsm {
    width: 25px;
    height: 25px;
    background: url(../ik.imagekit.io/workcations/gallery/landing-pages/social/tripadvisor.png);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  /*!sc*/
  @media screen and (min-width:600px) {
    .fDNOsm {
      height: 40px;
      width: 40px;
    }
  }

  /*!sc*/
  .bGoCXd {
    width: 25px;
    height: 25px;
    background: url(../ik.imagekit.io/workcations/gallery/landing-pages/social/facebook.png);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  /*!sc*/
  @media screen and (min-width:600px) {
    .bGoCXd {
      height: 40px;
      width: 40px;
    }
  }

  /*!sc*/
  data-styled.g431[id="sc-5b5a5b73-2"] {
    content: "cMbEAU,fDNOsm,bGoCXd,"
  }

  /*!sc*/
  .fyyEs {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  /*!sc*/
  data-styled.g432[id="sc-5b5a5b73-3"] {
    content: "fyyEs,"
  }

  /*!sc*/
  .hMkUOf {
    color: #2D2D2D;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 4px;
    font-size: 12.44px;
    font-style: normal;
    font-weight: 400;
    line-height: 18.7px;
  }

  /*!sc*/
  @media screen and (min-width:600px) {
    .hMkUOf {
      font-size: 16px;
      font-style: normal;
      font-weight: 500;
      line-height: 24px;
      -webkit-letter-spacing: 0.024px;
      -moz-letter-spacing: 0.024px;
      -ms-letter-spacing: 0.024px;
      letter-spacing: 0.024px;
    }
  }

  /*!sc*/
  data-styled.g433[id="sc-5b5a5b73-4"] {
    content: "hMkUOf,"
  }

  /*!sc*/
  .gMdBrT {
    color: #121212;
    font-size: 11.06px;
    font-style: normal;
    font-weight: 400;
    line-height: 17.7px;
  }

  /*!sc*/
  @media screen and (min-width:600px) {
    .gMdBrT {
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: 24px;
      -webkit-letter-spacing: 0.08px;
      -moz-letter-spacing: 0.08px;
      -ms-letter-spacing: 0.08px;
      letter-spacing: 0.08px;
    }
  }

  /*!sc*/
  data-styled.g434[id="sc-5b5a5b73-5"] {
    content: "gMdBrT,"
  }

  /*!sc*/
  .kUgUxp {
    padding: 40px 130px;
    width: 100%;
  }

  /*!sc*/
  @media screen and (max-width:600px) {
    .kUgUxp {
      padding: 0px 20px;
      width: 100%;
    }
  }

  /*!sc*/
  @media screen and (min-width:1920px) {
    .kUgUxp {
      padding: 50px 260px;
      width: 100%;
    }
  }

  /*!sc*/
  data-styled.g435[id="sc-644b6376-0"] {
    content: "kUgUxp,"
  }

  /*!sc*/
  .erQJCr {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    border-radius: 8px;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.9) 100%);
  }

  /*!sc*/
  data-styled.g444[id="sc-ec0d87ba-0"] {
    content: "erQJCr,"
  }

  /*!sc*/
  .efKSqU {
    background: url();
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
  }

  /*!sc*/
  data-styled.g451[id="sc-39af5e7-0"] {
    content: "efKSqU,"
  }

  /*!sc*/
  .jFhWyZ {
    width: 74vw;
    aspect-ratio: 289 / 367;
    padding: 0 10px;
    position: relative;
  }

  /*!sc*/
  .jFhWyZ .swiper-slide {
    border-radius: 12px;
  }

  /*!sc*/
  data-styled.g452[id="sc-39af5e7-1"] {
    content: "jFhWyZ,"
  }

  /*!sc*/
</style>
<style
  data-href="https://fonts.googleapis.com/css2?family=Amita&family=Roboto:wght@400;500&family=Yeseva+One&display=swap">
  @font-face {
    font-family: 'Amita';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/amita/v18/HhyaU5si9Om7PQls.woff) format('woff')
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Me5g.woff) format('woff')
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9vAA.woff) format('woff')
  }

  @font-face {
    font-family: 'Yeseva One';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/yesevaone/v22/OpNJno4ck8vc-xYpwWWxpik.woff) format('woff')
  }

  @font-face {
    font-family: 'Amita';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/amita/v18/HhyaU5si9Om7PTlpC_WoEoZKdbA.woff2) format('woff2');
    unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B09
  }

  @font-face {
    font-family: 'Amita';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/amita/v18/HhyaU5si9Om7PTlmC_WoEoZKdbA.woff2) format('woff2');
    unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
  }

  @font-face {
    font-family: 'Amita';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/amita/v18/HhyaU5si9Om7PTloC_WoEoZK.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format('woff2');
    unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format('woff2');
    unicode-range: U+1F00-1FFF
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format('woff2');
    unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format('woff2');
    unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCRc4AMP6lbBP.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fABc4AMP6lbBP.woff2) format('woff2');
    unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCBc4AMP6lbBP.woff2) format('woff2');
    unicode-range: U+1F00-1FFF
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBxc4AMP6lbBP.woff2) format('woff2');
    unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCxc4AMP6lbBP.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fChc4AMP6lbBP.woff2) format('woff2');
    unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
  }

  @font-face {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
  }

  @font-face {
    font-family: 'Yeseva One';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/yesevaone/v22/OpNJno4ck8vc-xYpwWWxliBVWzfAw0blNQ.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
  }

  @font-face {
    font-family: 'Yeseva One';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/yesevaone/v22/OpNJno4ck8vc-xYpwWWxlilVWzfAw0blNQ.woff2) format('woff2');
    unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
  }

  @font-face {
    font-family: 'Yeseva One';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/yesevaone/v22/OpNJno4ck8vc-xYpwWWxliJVWzfAw0blNQ.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
  }

  @font-face {
    font-family: 'Yeseva One';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/yesevaone/v22/OpNJno4ck8vc-xYpwWWxliNVWzfAw0blNQ.woff2) format('woff2');
    unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF
  }

  @font-face {
    font-family: 'Yeseva One';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/yesevaone/v22/OpNJno4ck8vc-xYpwWWxli1VWzfAw0Y.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
  }
</style>