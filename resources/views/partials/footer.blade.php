@php
    $igToken = '6616646214.1e2fdb7.8849f1413e574a048255eb19aae5644d';
    $igCount = 9;
    $igJsonLink = 'https://api.instagram.com/v1/users/self/media/recent/?';
    $igJsonLink.= 'access_token='. $igToken . '&count='.$igCount;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $igJsonLink);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

    $igJson = curl_exec($ch);
    curl_close($ch);

    $feed = json_decode($igJson, true, 512, JSON_BIGINT_AS_STRING);
@endphp

<!-- ================ start footer Area ================= -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                <h4>Contact Us</h4>
                <ul>
                    <li>Laboratorium Workshop, Lantai II, Pusat Robotika ITS</li>
                    <li>Jl. Teknik Kimia, Kampus ITS Sukolilo, Surabaya, 60111</li>
                    <li>+62 822-3010-4565</li>
                    <li><a href="mailto:iris@its.ac.id">iris@its.ac.id</a></li>
                </ul>
            </div>
            <div class="col-xl-6 col-sm-12 mb-12 mb-xl-0 single-footer-widget">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.838995163011!2d112.79762184786317!3d-7.277432886364895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa11d96fdfe5%3A0x329c27ff3fca8170!2sUKM+Robotika+ITS!5e0!3m2!1sen!2sid!4v1484736564728" width="100%" height="290" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-xl-3 col-sm-12 mb-8 mb-xl-0 single-footer-widget">
                <h4 class="text-center">Instafeed</h4>
                    @php
                    $idx = 0;
                    foreach($feed['data'] as $post) {
                        $imgLink = $post['link'];
                        $imgSrc = str_replace('http://', 'https://', $post['images']['low_resolution']['url']);
                        if($idx % 3 == 0)
                            echo "<ul class='instafeed'>";

                        echo "<li><a href=$imgLink target='_blank'>";
                            echo "<img class='img-responsive' src=$imgSrc>";
                        echo "</a></li>";
                        if($idx % 3 == 2)
                            echo "</ul>";
                        $idx++;
                    }
                    @endphp
            </div>
        </div>
        <div class="footer-bottom row align-items-center text-center text-lg-left">
            <p class="footer-text m-0 col-lg-8 col-md-12">
                Copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script> IRIS ITS</p>
            <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                <a href="mailto:iris@its.ac.id"><i class="ti-email"></i></a>
                <a href="https://www.youtube.com/channel/UCOmBeTiru1hFtOiGXneI_Gw" target="_blank"><i class="ti-youtube"></i></a>
                <a href="https://www.instagram.com/iris.itsrobotic" target="_blank"><i class="ti-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->