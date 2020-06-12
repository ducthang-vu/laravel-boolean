<script id="student-template" type="text/x-handlebars-template">
    <a href="{{ url('student/show')}}/@{{ id }}">
        <div class="card">
            <header class="card__header">
                <img src="@{{ img  }}" alt="pic">
        
                <div class="card__header_bio">
                    <h3>@{{ name  }} (@{{ age  }} anni)</h3>
                    <p>Assunt@{{ declination }} da @{{ employer }} come @{{ role }}</p>
                </div>
            </header>
    
            <p class="card__text">
                @{{ description  }}
            </p>
        </div>
    </a>
</script>