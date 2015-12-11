<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Date</th>
    </tr>
    {foreach from=$topics key=k item=row}
    <tr>
        <td>
            <li><a href="/ShowTreads/posts/topic_id-{$row.topic_id}/">{$row.theam}</li>
        </td>
        <td>
            {$row.login}</td>
        <td>
            {$row.create_date}</td>
        {/foreach}
</table>
<h3>Adding new Topic </h3>
<form action="/ShowTreads/topicAdd/" method="POST">
    <label> Theam: <input type="text" name="topic_theam"/> </label>
    <label> Text: <input type="text" name="topic_text"/> </label>
    <input type="submit" value="Go!"/>
</form>