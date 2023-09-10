<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p id="about-title" class="lead fw-light mb-4"></p>
                    <p id="about-details" class="text-muted"></p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" id="twitter" class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                        <a target="_blank" id="linkedin" class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="github" class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
            aboutrequest();
    async function aboutrequest() {
        try {
            let URL = "/aboutData";
            let response = await axios.get(URL);
            document.getElementById('about-title').innerHTML = response.data['title'];
            document.getElementById('about-details').innerHTML = response.data['details'];
        } catch (error) {
            alert ('something went wrong, please try again')
        }
    }


            socialrequest();
    async function socialrequest() {
        try {
            let url = "/socialData";
            let response = await axios.get(url);

            // loader hide, content show
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');


            document.getElementById('twitter').href = response.data['twitterLink'];
            document.getElementById('linkedin').href = response.data['linkedinLink'];
            document.getElementById('github').href = response.data['githubLink'];
        } catch (error) {
            alert ('something went wrong, please try again')
        }
    }

</script>
