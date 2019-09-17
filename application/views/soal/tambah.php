<form action="<?= base_url('soal/simpan'); ?>"  method="post" class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="form-group">
        <label>Soal</label>
        <textarea name="soal"  cols="20" rows="10" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Jawaban a</label>
        <input type="text" name="jawaban_a" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Jawaban b</label>
        <input type="text" name="jawaban_b" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Jawaban c</label>
        <input type="text" name="jawaban_c" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Jawaban d</label>
        <input type="text" name="jawaban_d" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Jawaban e</label>
        <input type="text" name="jawaban_e" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Jawaban yang benar</label>
        <select name="jawaban_yang_benar" class="form-control">
            <option></option>
            <option>a</option>
            <option>b</option>
            <option>c</option>
            <option>d</option>
            <option>e</option>
        </select>
    </div>

    <button type="submit" class="btn btn-outline-dark">Simpan</button>
    
</form>