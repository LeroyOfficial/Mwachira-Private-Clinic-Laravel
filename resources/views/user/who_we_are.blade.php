<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div class="text-center text-white" style="background: url({{asset('assets/img/breadcrumbs.jpg')}}) center / cover no-repeat;padding-top: 30vh;padding-bottom: 10vh;">
        <h1 class="header">About the Clinic</h1>
    </div>
    <div class="section py-5 px-2 px-lg-5 bg-white text-dark">
        <div class="col-12">
            <h1>Who we are</h1>
            <p>Established in 2006, Mwachira Medical Clinic is dedicated to providing high-quality health services to people in Lunzu and surrounding communities. The clinic offers a wide range of services, including treatment for both communicable and non-communicable diseases, guidance and counseling for people living with HIV/AIDS, and ART and STI services. In addition, the clinic provides family planning services to help individuals make informed decisions about their reproductive health.</p>

            <p>Despite the low and medium income range of people in Lunzu and surrounding communities, such as Kunjawa, Mpasuka, Chepuli, Nazombe, Chempira, Galawanda, Manjomvbe, Chomboto, Mbozi, Kumponda, Saluti, and Pasani, the clinic tries its best to offer all these health packages. The clinic recognizes that access to quality healthcare is essential for overall health and wellbeing, and is committed to providing affordable, accessible care to all members of the community.</p>

            <p>To ensure that patients receive the best possible care, the clinic is staffed by highly trained healthcare professionals who are committed to providing compassionate, patient-centered care. The clinic also utilizes the latest medical technologies and treatment protocols to ensure that patients receive the most effective treatments available.</p>

            <p>At Mwachira Medical Clinic, the health and wellbeing of patients is always the top priority. The clinic is committed to providing the highest quality care possible and is dedicated to helping patients achieve optimal health and wellbeing.</p>
        </div>
    </div>
    @include('user.footer')
</body>

</html>
