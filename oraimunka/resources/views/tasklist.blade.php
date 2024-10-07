<ul>
 <?php foreach($tasks as $task) : ?>
 <li><?= $task; ?></li>
 <?php endforeach; ?>
</ul>

<ul>
 @foreach($tasks as $task)
 <li>{{ $task }}</li>
 @endforeach
</ul>

<div>{{ $foo }}</div>