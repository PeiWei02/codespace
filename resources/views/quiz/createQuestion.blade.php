<form method="POST" action="/quiz/{{ $quiz->id }}/question">
    @csrf

    <label for="question">Question:</label>
    <input type="text" id="question" name="question">

    <!-- Repeat this for each option -->
    <div>
        <label for="options[0][text]">Option:</label>
        <input type="text" id="options[0][text]" name="options[0][text]">
        <label for="options[0][is_correct]">Is this option correct?</label>
        <input type="checkbox" id="options[0][is_correct]" name="options[0][is_correct]">
    </div>

    <div>
        <label for="options[1][text]">Option:</label>
        <input type="text" id="options[1][text]" name="options[1][text]">
        <label for="options[1][is_correct]">Is this option correct?</label>
        <input type="checkbox" id="options[1][is_correct]" name="options[1][is_correct]">
    </div>

    <div>
        <label for="options[2][text]">Option:</label>
        <input type="text" id="options[2][text]" name="options[2][text]">
        <label for="options[2][is_correct]">Is this option correct?</label>
        <input type="checkbox" id="options[2][is_correct]" name="options[2][is_correct]">
    </div>

    <div>
        <label for="options[3][text]">Option:</label>
        <input type="text" id="options[3][text]" name="options[3][text]">
        <label for="options[3][is_correct]">Is this option correct?</label>
        <input type="checkbox" id="options[3][is_correct]" name="options[3][is_correct]">
    </div>

    <!-- Add more option inputs as needed -->

    <button type="submit">Create Question</button>
</form>
