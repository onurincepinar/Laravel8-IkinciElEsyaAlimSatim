@extends('HomeScreen.master')
@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('assets')}}/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Frequently Asked Questions
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            References
                        </h3>
                        <div class="container">
                            <div class="accordion" id="accordionExample">
                                <div class="item">
                                    <div class="item-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Siparişim ne zaman gelir?
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="t-p">
                                            <p> • Satın aldığınız ürünler ürün detay sayfasında belirtilen teslimat tarih aralığında teslim edilir. Satın aldığınız ürünlerin teslimat tarihine "Hesabım" bölümünde “Siparişlerim“ sayfasından da ulaşabilirsiniz.</p>


                                            <p>• Üründe “24 saatte kargoda” yazısı var ise siparişiniz 24 saat içinde kargoya verilir. Bu ürünler “HIZLI TESLİMAT” ürünleridir.</p>


                                            <p>• Sipariş dağıtıma çıktığında kargo firması tarafından SMS ile bilgilendirilirsiniz.</p>


                                            <p>• Kargoya verildikten sonra siparişinizin kargo aşamalarını "Hesabım" bölümünde “Siparişlerim“ sekmesinde bulunan “Kargom Nerede?" linkinden takip edebilirsiniz.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Ürünümü nasıl iade edebilirim?
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordionExample">
                                        <div class="t-p">
                                            <p>• İade adımları:</p>

                                            <p>1. trendyol.com ve mobil uygulamalarda yer alan "Hesabım" bölümünden “Siparişlerim'e“ gidin.</p>

                                            <p>2. “Detaylar” butonuna basın ve siparişinizin detaylarını görüntüleyin.</p>

                                            <p>3. "Kolay İade Talebi Oluştur" butonuna basın.</p>

                                            <p>4. İade edilecek ürün ve iade nedeni seçin. Aynı üründen birden fazla satın aldıysanız iade edilecek ürün adedini de seçmeniz gerekir.</p>

                                            <p>5. Kargo seçiminizi yapın.</p>

                                            <p>6. Ekranda çıkan iade kargo kodunu not alın. İade kargo kodunuza "Siparişlerim" sayfasından ve üyelik mail adresinize gönderilen bilgilendirme mesajından da ulaşabilirsiniz.</p>

                                            <p>7. İade edilecek ürünler ile birlikte faturayı tek bir pakete koyun. (Her bir teslimat için iade kodu ayrı ayrı alınmalı ve paketler ayrı ayrı hazırlanarak kargoya verilmelidir.)</p>

                                            <p> • Faturanız yoksa aşağıdaki bilgileri boş bir kağıda yazıp iade paketinin içine koyup iadenizi yapabilirsiniz.</p>

                                            <p> o Ad Soyad:</p>

                                            <p>o Sipariş No:</p>

                                            <p>o İade Nedeni:</p>

                                            <p>8. Paketi iade kargo koduyla birlikte seçtiğiniz kargoya 7 gün içinde teslim edin. Kodu vermeniz yeterlidir, ayrıca bir İade adresi belirtmeniz gerekmez. 7 günü geçirdiğiniz durumda yeniden iade kargo kodu almalısınız.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                Siparişim ne zaman gelir?
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                         data-parent="#accordionExample">
                                        <div class="t-p">
                                            Satın aldığınız ürünler ürün detay sayfasında belirtilen teslimat tarih aralığında teslim edilir. Satın aldığınız ürünlerin teslimat tarihine 'Hesabım' bölümünde 'Siparişlerim' sayfasından da ulaşabilirsiniz.

                                            Üründe '24 saatte kargoda' yazısı var ise siparişiniz 24 saat içinde kargoya verilir.

                                            Sipariş dağıtıma çıktığında kargo firması tarafından SMS ile bilgilendirilirsiniz.

                                            Kargoya verildikten sonra siparişinizin kargo aşamalarını 'Hesabım' bölümünde 'Siparişlerim' sekmesinde bulunan 'Kargom Nerede?' linkinden takip edebilirsiniz.
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                Şifremi unuttum, nasıl giriş yapabilirim?
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                         data-parent="#accordionExample">
                                        <div class="t-p">
                                            Şifrenizi unuttuysanız eğer, şifre sıfırlama işlemi yaparak hesabınıza giriş yapabilirsiniz.

                                            Bunun için takip edeceğiniz adımlar;

                                            'Üye Girişi' sayfasından 'Şifremi unuttum' yazısına tıklayın. Üyeliğinize ait e-posta adresinizi girerek 'Gönder' dediğinizde ilgili e-posta adresinize bir link gelecek.

                                            Gelen linke tıklayarak yeni şifre oluşturma işleminizi yapabilirsiniz.

                                            Eğer link size ulaşmadı ise spam klasörünüzü kontrol edin.

                                            Ayrıca dilediğiniz zaman 'Hesabım>Kullanıcı Bilgilerim>Şifre Güncelleme' kısmından şifre değişiklik işleminizi yapabilirsiniz.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            </div>
        </div>
    </section>
@endsection
