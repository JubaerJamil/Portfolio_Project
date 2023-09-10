<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="projecthtml" class="col-lg-11 col-xl-9 col-xxl-8">


            </div>
        </div>
    </div>
</section>

<script>
    getprojectdata();
    async function getprojectdata() {
        let URL = "/projectData";

        try {

                // loader show, content hide
                document.getElementById('loading-div').classList.remove('d-none');
                document.getElementById('content-div').classList.add('d-none');

                let response = await axios.get(URL);

                // loader hide, content show
                document.getElementById('loading-div').classList.add('d-none');
                document.getElementById('content-div').classList.remove('d-none');

                response.data.forEach((item)=>{

                    document.getElementById('projecthtml').innerHTML+= (
                        `
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">${item['title']}</h2>
                                            <p>${item['details']}</p>
                                            <a class="text-decoration-none" target="_blank" href="${item['previewLink']}">View Project</a>
                                        </div>
                                        <img class="img-fluid" src="${item['thumbnailLink']}" alt="..." />
                                    </div>
                                </div>
                            </div>
                        `
                    )

                })
        }catch (error){
            alert ('something went wrong, please try again');
        };
    };

</script>
