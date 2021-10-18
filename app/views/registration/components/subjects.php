<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/visitor/registration/tokens.css' ?>">


<script>
    var subjectsArray = [
        "Mathematics",
        "Science",
        "Health",
        "Physical Education",
        "Arts",
        "Music",
        "Drama",
        "Dancing",
        "Occupational Therapy",
        "Language arts",
        "English",
        "Life Science",
        "Earth Science",
        "Physical Science",
        "Social Studies",
        "Geography",
        "Computer Science",
        "Economics",
        "Physics",
        "Chemistry",
        "Biology",
        "Zoology",
        "Botany",
        "Geology",
        "Veterinary Science",
        "Food Science",
        "French",
        "Japanese",
        "German",
        "Economics",
        "Political Science",
        "Programming"
    ]


    $(document).ready(function() {
        $('#skill').tokenfield({
            autocomplete: {
                source: function(request, response) {
                    var results = $.ui.autocomplete.filter(subjectsArray, request.term);
                    response(results.slice(0, 5));
                },
                delay: 100,
            },
            showAutocompleteOnFocus: true
        });
    });
</script>