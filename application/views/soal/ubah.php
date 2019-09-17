<form action="<?= base_url('soal/ubah'); ?>"  method="post" class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="form-group">
        <input type="hidden" name="id" value="<?= $soal['id']; ?>">
        <label>Soal</label>
        <textarea name="soal"  cols="20" rows="10" class="form-control" required><?= $soal['soal']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Jawaban a</label>
        <input type="text" name="jawaban_a" class="form-control" value="<?= $soal['jawaban_a']; ?>" required>
    </div>
    <div class="form-group">
        <label>Jawaban b</label>
        <input type="text" name="jawaban_b" class="form-control" value="<?= $soal['jawaban_b']; ?>" required>
    </div>
    <div class="form-group">
        <label>Jawaban c</label>
        <input type="text" name="jawaban_c" class="form-control" value="<?= $soal['jawaban_c']; ?>" required>
    </div>
    <div class="form-group">
        <label>Jawaban d</label>
        <input type="text" name="jawaban_d" class="form-control" value="<?= $soal['jawaban_d']; ?>" required>
    </div>
    <div class="form-group">
        <label>Jawaban e</label>
        <input type="text" name="jawaban_e" class="form-control" value="<?= $soal['jawaban_e']; ?>" required>
    </div>
    <div class="form-group">
        <label>Jawaban yang benar</label>
        <select name="jawaban_yang_benar" class="form-control">
            <option><?= $soal['jawaban_yang_benar']; ?></option>
            <option>a</option>
            <option>b</option>
            <option>c</option>
            <option>d</option>
            <option>e</option>
        </select>
    </div>

    <button type="submit" class="btn btn-outline-dark">Simpan</button>
    
</form>