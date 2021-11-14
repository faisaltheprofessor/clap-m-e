
<script src="/assets/js/notify/notify.js"></script>
<script>

</script>

<?php if(\Illuminate\Support\Facades\Session::has('success')): ?>
    <script>
            $.notify("<?php echo e(Session::get('success')); ?>", "success", {position: "bottom-right"})
    </script>


<?php elseif(\Illuminate\Support\Facades\Session::has('failure')): ?> 
<script>
    $.notify("<?php echo e(Session::get('failure')); ?>", "danger", {position: "bottom-right"})
</script>
<?php endif; ?>
<?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/includes/success.blade.php ENDPATH**/ ?>