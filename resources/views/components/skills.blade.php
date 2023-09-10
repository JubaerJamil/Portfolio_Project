<div class="mb-5">
    <div class="d-flex align-items-center mb-4">
        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
    </div>
    <div id="skillshtml" class="row row-cols-1 row-cols-md-3 mb-4">


    </div>
</div>


<script>

        skillsrequest();
    async function skillsrequest() {

        try {

            let URL = "/skillsData";
            let response = await axios.get(URL);
                response.data.forEach ((item)=>{

                    document.getElementById('skillshtml').innerHTML +=
                    (
                        `
                        <div class="col mb-4 mb-md-0 mt-3"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">${item['name']}</div></div>
                        `
                    )
                });

        } catch (error) {
            alert ('something went wrong, please try again');
        }

    };



</script>
