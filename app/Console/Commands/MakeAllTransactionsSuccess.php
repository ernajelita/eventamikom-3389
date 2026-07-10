<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Transaction;

class MakeAllTransactionsSuccess extends Command
{
    protected $signature = 'transaction:make-success 
                            {--order_id= : Update specific order_id only}';

    protected $description = 'Update all transactions (or a specific one) to success status';

    public function handle()
    {
        $orderId = $this->option('order_id');

        if ($orderId) {
            $transaction = Transaction::where('order_id', $orderId)->first();

            if (!$transaction) {
                $this->error("Transaksi dengan order_id '{$orderId}' tidak ditemukan.");
                return 1;
            }

            $transaction->update(['status' => 'success']);
            $this->info("Transaksi '{$orderId}' berhasil diupdate ke status success.");
        } else {
            $count = Transaction::whereNotIn('status', ['success', 'settlement'])->count();

            if ($count === 0) {
                $this->info('Semua transaksi sudah berstatus success/settlement.');
                return 0;
            }

            $updated = Transaction::whereNotIn('status', ['success', 'settlement'])
                ->update(['status' => 'success']);

            $this->info("Berhasil mengupdate {$updated} transaksi ke status success.");
        }

        return 0;
    }
}
