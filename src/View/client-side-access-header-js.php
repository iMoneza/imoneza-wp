<script src="<?= $this->javascriptUrl ?>"></script>
<script>
    iMoneza.ResourceAccess.init({
        ApiKey: '<?= $this->apiKey ?>',
        ResourceKey: '<?= $this->resourceKey ?>'
    });
</script>