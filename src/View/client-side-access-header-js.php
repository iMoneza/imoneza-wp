<script src="<?= $this->javascriptUrl ?>"></script>
<script>
    iMoneza.paywall.init('<?= $this->apiKey ?>', {
        resourceKey: '<?= $this->resourceKey ?>'
    });
</script>