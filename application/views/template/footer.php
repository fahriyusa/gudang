<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<!-- <script type='text/javascript' src='https://cdn.prinsh.com/NathanPrinsley-effect/efek-salju.js'></script> -->
<script>
        (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                        form.addEventListener('submit', event => {
                                if (!form.checkValidity()) {
                                        event.preventDefault()
                                        event.stopPropagation()
                                }

                                form.classList.add('was-validated')
                        }, false)
                })
        })()
</script>
</body>

</html>