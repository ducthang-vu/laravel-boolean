<script id="student-template" type="text/x-handlebars-template">
    @{{#each students}}
        <a href="{{ url('students/show') }}@{{ id }}">
            <div class="card">
                <header class="card__header">
                    <img src="@{{ img  }}" alt="pic">
            
                    <div class="card__header_bio">
                        <h3>@{{ name  }} (@{{ age  }} anni)</h3>
                        <p>Assunt@{{#if (isMale gender)}}o@{{else}}a@{{/if}} da @{{ employer }} come @{{ role }}</p>
                    </div>
                </header>
        
                <p class="card__text">
                    @{{ description  }}
                </p>
            </div>
        </a>
    @{{/each}}
</script>