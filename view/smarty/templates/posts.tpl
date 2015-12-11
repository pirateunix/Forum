<h3>{$topic.text}</h3>
<table border="1">
    <tr>
        <th>Text</th>
        <th>Author</th>
        <th>Date</th>
        <th>Delete</th>
    </tr>
    {foreach from=$posts key=k item=row}
    <tr>
        <td>
            {$row.text}</td>
        <td>
            {$row.login}</td>
        <td>
            {$row.post_time}</td>
        <td>
            <form action="/ShowTreads/del/topic_id-{$topic.topic_id}/post_id-{$row.post_id}/">
                <p><input type="submit" value="del"/></p>
            </form>
        </td>
        {/foreach}
</table>
<form action="/ShowTreads/showReply/topic_id-{$topic.topic_id}/">
    <p><input type="submit" value="reply"/></p>
</form>