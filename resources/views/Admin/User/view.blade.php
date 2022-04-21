@extends('admin.layouts.main')
@section('content')
<div class="container">
  
</div>

<div class="container">
  <div class="card card-custom gutter-b">
    <div class="card-header flex-wrap py-3">
      <div class="search">
        <div> 
         <a href="{{route('user-add')}}" class="btn btn-outline-brand m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
           <span>
             <i class="la la-plus"></i>
             <span>Add</span>
           </span>
         </a>
        </div>
        
      </div>
    </div>
    <div class="card-body">
      <!--begin: Datatable-->
      <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-checkable dataTable no-footer dtr-inline collapsed" id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 1234px;">
        @if(session()->has('message'))
    			<div class="alert alert-success">
        			{{ session()->get('message') }}
    			</div>
			  @endif
        @if(session()->has('error'))
          <div class="alert alert-danger">
            {{ session()->get('error') }}
          </div>
        @endif
        <thead>
          <tr role="row">
            <th class="sorting sorting_desc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"  >ID</th>
            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >Tên</th>
            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >Image</th>
            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >Email</th>
            <th class="sorting" rowspan="1" colspan="1" style="text-align: center"  aria-label="Actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($user as $u)
            <tr class="odd">
              <td >{{$u->id}}</td>
              <td>{{$u->name}}</td>
              <td><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYZGRgaGhwcGhwYHBgYHB4aGBoaGhwcHBwcIS4lHh4rIRwcJjgmKy8xNTU1HCQ7QDs0Py40NTEBDAwMEA8QHhISHjQrJCs0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAADBAECBQAHBgj/xAA+EAABAwIEAwYEBQIFAwUAAAABAAIRAyEEEjFBUWFxIoGRobHwBRPB0QYUMuHxUpJCYnKC0iOi4hUkU5Oy/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAJhEAAgIBAwUBAAIDAAAAAAAAAAECERIhMVEDBBMUQWFxoSIyUv/aAAwDAQACEQMRAD8A8gAUwuAVwFoFYUwrBTCoKwpyqwarBqAHCnKrhimEAPKpDUTKrhiqRAWRTk9wmAxWaxbUSWLNYpyJn5aIKJ1VURYoGq+RNNoK4okW6e/fBXAlibWcvfv1Vms9hOCj73ixCs2mffgtYksQLAuLCnjQXOpe7KYlsSDFIpJv5aqaaYixYMXOCZ+Wo+Wo4lsVLFUsTZYqFijQsXNPdRCOWKMiUUDkXFqLlUFqgAliqWo+VQWqAAWqC1GLVUtUADKuRcqlQC4CsGqwaphQpACkBWDVYNQFGt4LsqLC6EoFQFaFZrVcMVIVDUQU1ZqIB7/laQIbTsjso2E++KtS01vomsgMfZdY0ZYkKeqLTo++5NtpwTF+tvKVDGze+uw98lUQinhTOnJMNwNxa/0O60sM2CIbba/15JmvSeMrQ0XOxBsJ2Hu66qqMamScBOgveNdFFXAluvPktpj4/wAQMaQJn9rFGx+Ia1oNgDxEEaclW4imfLvpDh4IBb79Fo1CIJbcbE23ElIPMCQBeenvRcpSNpFWU/ZUPoFHoEaG6YFMzbRRUDKLeKI2mtF2EDjP8orcJysqosWY7qSG+nda9TCaHb1QXYZGgZhpobqfJaNSkgFiw0UTyqMiZexULVlmgGVVLEwGKpYoBctVHNTJYquYoBbKuRcq5ALNarBqu1qs1qxRSoCkNRMiuGK0AQYuDEYNRGsVoAmM/n90VlONldohGpa8p9lVAGyiNxaVfJy9E3VYI5a8+llAbMDLESd/Naogi9hTeEYTE6Wk7e/snmfDjbL2t40O22yYw1N1FwdlMb8p67Kxi7MtgcfQDR2QYIAzGQBvbu9UhTJb1stf4rVc6Tm7JMgEbxH3SGGoi5utt6hIJSxT/wCojy1+iJ+afFySY14I/wCVEWPa34JNhI2uOG/NG6JQx+cc1pvciD0N/fVBfVLhBMwRAvYcAobTk339UalQBMzvppr3wltlBuw5y6C97bIRw5DbXk3jc6xzW7QhuojTrPd1Tb6bXcOOm9h4pjYs+VpMAN9PRHZWBkaQZ7rrVHwPNMug8lmHBOa4ggw3WBMKNNFRZmMgQNNtN/ZU4bEEmDdKmkRtbYquXcJkxQ1VfDiMxLRp/B0QfnTYBUJJUAJbFEvM8CgkK+QqwYoUWexDyJz5agU1KApkVcid+Wq/LSgJOpoTmJ97OUILmKNAUhcjZVygEmtRGsVmMR2sWTVASxTlTDaallNC0BaxXDEy2io+XdBQBjDMeqK5hEe9EdlI6hMMotEF3eO9aSI0CwdAk9OPitmjgWxIMuPfbXdLU3NDYHHh3JmlWynbSOS6xSMOyDTDSSJDuA09/dAbVIacx11G/fxU1a0meXNJvqSjaFFn1Rw7kVrmgalJFxXB54rOQobdVgqryD6e+KXzKhTItDbTveevBEYUm1xRGvRMUPsfp7smGVztb3os1j0RlQhaslGk/EOvBOUax7tsiB4LSW2JsTvCRpYhwaWzZ2vcua+OStigjMOQYdpMhdiMGXuJEWFzyB4DdS2sXkDYXVnvAnLP07u9Si0IvY1roAJ2MqlbDXkRcadFtfD8Dn1EAiZm8xtCf/E+FYGsyghzWweYOhPOVC0fHv4BRHvimKTM1o7yq/KIJHAq0QExk7IoYtDCUS3UQN5HFHqYQTPv3KqiRsxixV+WtV9C3el30lGqCM57EF9NaD2clSpTEc1mimbkUo/y1KlASZTTLKSNTopplBccj0KAoKKs2itBtDkisoLLkdFAzRRVhQWszB7+wrswvFFIvjEmUsoA8xqljh5krXdh1R9K2i1kjD6Zn5YCq8pp9OyG6mtZmX0xN5KHlTvyVYUFMyeMznMXBi0RQVhh1HMvjM75an5S0hhlIwyZl8Zm/LVxTWiMKuNCEyJ4xDKpyp78uu+QtKZHAVYEQBGFFX+StZkwAssESmwlXbSKOymrmMBjA1ciNjsYHNNpdG87c0EUpRBR87K5EUAeBwTH03SQCDY8eXihvwoNMkfr5DYDl09FoUWZSLaTHemaVZ9M5WZSHWdLZgkG43GpVU0g4P4fPsqWmZiBBgXvtv1XYmo9zBplEXHmE9WwTgSTBAidjfl9VXF02hkh02uN1HOgunaM5lUWgHTqpqNtcQmMPQ7LSD6J9+HtKqnZHCjByXibIb6a3GYcCSRIgjhc6JGvQlZyQwZjPZfRSn/klSpkhgytHDpynheSbw+GWlRwi8jkj3RgZ9PCJhmEC1KeGR24dYc0bpIyGYXkpfhuS224ayo/DJmgYbsOgPo6rfdhkB+G5JmMUfPuwyocOt1+F5ITsKrmRxRjDDqwoLU/LIjcKmRMTJGHV24XktZuGRG4ZTMmJlNwqRxWNpsIEyc2UgbD+o8tOq+obhtl59+IaLKL3sDzplIuDIhwHeWzKRlZibxWgnifi785NwCBa4tMWSWM+IufUzyQ6QAAdNgBwkyUhVeC+RbS0zf7WV6+UwdNL/wtrU8rk2fV/BcU8v8Alucak7wZbHEjYyBcjdb7sKvmvwdUYagY57g5xkAQGkslwudddPY9Ddhllyo9PTVxMAYVWGFW1+WVm4ZPIbxRjtw3JEGGWy3DKwwqvkFGUzD8kf8ALLSZhkZuHWl1DDRmGlpZPYaiLS3VMflkWjRIKPqClQriPhTyXloBBghpv1WNifh5E5mxf02X3WHcIWf8WYHiw3R9TQkZPKqPlcN8OaIJA13+nJO/lxFm6BNHD6JsMBCx5aNyjZhPwqWq4TkvovkBBqYZH1SKJ8s7CKFvOwylTym8RalSaGZ5GUNzEi4ygSTbWydoFhcxocMz2l7Ru5gyy4Dh2m+IXhFOs8DKHvA0gOcBHCAYTdL4niQWkVqgLWlrTnf2WmJaL2BytsOA4Lo+0k/pw9r8PfGYY8EVuGXgg+LYnKWmvULTBIL3kGNDcqjMRVDg8PcHiYcCQ4Tc9oXuVF2M+UZfc/h+gxh1H5deA1cVWecz61RzhoXPeSOhm2my7B1alIk06r2F05sj3tmYkmDc2F1fRnW6Hsfh70/D8kvUw++gXjNP4vimxGJq6OAl7iQHkF1yZ2CXq16pBD61Z4IIIL6jwQdQQXXRdj1OUaXc/h7QaUi1xyQ3UF41h3VGtaGVKjWtJLQ172hubWADAnknGfFMSLDEVu97z5krXpz5RV3K+o9WNBSMOvKcP8VxLLNxFX/c8v8ADPKD+crGf/cV73P/AFan/KyvqT5RfZXB6+KHJXbSXjYrVRpXrf8A21P+SIzH15EV61jImo83G9yj7KfKJ7C4PYm0189+L/w3+ZDC2czXQQ3dp1EwYjXhtaZXxFP4viyTGIqW4vPojM+KY0tObEPaLWzknyvC5PoTjraD60ZKqJ/Fv4aZh20XMY5rXMIedSHgzfYEtdEz/gS/wT8JVq+HfUaIDQ7I0/qe5v8AhEmw2k7qK+Or1GupvrVHM1yvzODiDI1Okq9PF1Gw1mJq04ENaXPawchDojuVxdbr+dTncXLY+q/Bf4ZDGh9am4VGO7IdoCB+to7yJ5L697ALmwXj9fG4tn6qtUgtjs1Hv7PAibJd2PqvZkdUe5hblLS98ZZzQQTe6vqTlraNLrRiqSPXRiqZcGiowuIJAD2kkDWBKYc9jRLnNA4kgC9hcrw0YNhH6fU/VRUwjTEiYECSTAFwBy5K+jL/AKJ7H4e9BgGqkRoCD7/deHYjEVHtDKj3vaNGve9w8CYQKcts2W2vlJA1Bi3QeARdjKtx7C4PfmUxBKI1q8GofEK7B2Kr2f6XuAnoDCvV+MYl0B1eo6CCJeTBGhHA80faTX1E864PemsRWsXgH/rmJ0/MVf73/dDf8axO+Iq/3v8Aup6k+UPMuD9AvqtZAc5rZ0kgT0nqPFXc0br844rFVKhBqOc8jQv7ZE8C6YUPx9WZzvn/AFGfGVH2kuSeZcH6FfTupbTX55HxGrp8x5HNzo9Vx+JVv/kfH+p//JZ9SXJr2Fwfoj5ao+kvzlUxTz/jf/e/6uQDVfIIe6Rp2nW6Xsnpy5J5/wAP0S6muX5zNZ27nH/c5Ss+pLn+jXs/gcNRms5rmgIrWhfWs8pDWiNkVtI9yJRYC4QJmyLWa/Zp025e/NWwBbTi1kb5XJTTpucCYi0314/VWxNN7BIvEz3fvZX4CGsI2Hf6qkumIgcdeCDhXuedSI198V9BSYxgkwTz20nr+6JrcqMuG8Sf300V6eFkybDg5PZ2izY7vVKYivIg/RNORZL8ONoHSEB5buSf2SzarnHK0EmbAcOfJbHw/wCD3DnnnB20N+M6KobmUXj/AANvGouj08C97czyW8hqt7IxuwsO/eLcxdLvqNN5iYgdZi/UgK2ime2iGRG+/wB0pXxJLgGzPJHxdWLiSY058IRcDhAO24do7LnLV0C+DouIlx8brviGFOTM0Sdwb+XFaOEjUi2vjb30TXygQQeAkDnz52C1jH/WgfHYXFGb681osY18yYMbIXxr4c6m4uAMAbdErhKmhPerGk6ZnYPVwNVl29ps7axzCCyow6iCddjK2sLi4tHKfG3guxGAp1DmIg3Mi1+aOPAMtzAW9m5/zKrcK4305DRPP+DuH6Hydp4yN+iE2nUYQHt14abj6HwXO63QF24YtmxHRJ4p2Qyb81v08S1xg8B5pHHYUPkC3MeXd9lLvYGdSqtdsZVyw8oQW4d7RAGmpHqozvabhXVbgK6jBuLcVQtBKL+Zc60T/CsxnZ05eKJtgUDL2uEGIMSnHsyiI9m6CwDUpoBd7PBDcxN1IPRBLNlKvYC2Rcr/ACOa5Zp8AfFMR75fdFpUh4+gGvkgCqjHEQQb6fQz6rakq1A9hHgEHQNPqD78E0ysIju8Bv72WLRqkzf3MIrapEgjWZ529+Cjk29AaBriePrcwi08W10g30+31WI2vOZ0TfbWTOnkjYRrnSbxnE8yTFvEK227A0/D5SX7SfoPRQMTnPZkk2jmU9QwJdDHm2juXaAnwzHwT1DCMZlygTmBJHQSJ6Se5bf4KMmhhXve0Qe0/LNunonGfD8rwX3ESRc3A34wXBaFSsA4nZryRPJsA90+SHiXyYIi5AnclzJCJKy6DzGMZfKAYaBa19O6SUGq7QAgkc7E2BBOnArPxGLkFw2MAcmgAEbxmjySxqkgNE5WhxnQzlM9Lz3dUcnsLGK1UtcbtgyLconKOQA8VnPra9QGjckRE+fgrVsYS/MJG3jrHAm/TvSuH7To7rTpv9B3LLlSIPfCaWYy5tpvEEwdTe0rScyItPAC0deF48kTC0ms0LXAkCRGkacZV69QMdI3nWNQ0EacU6f2TN7IqDoQLdoGLcBHkfFOUAS+DYDs63iTHlHcVn08SSHAi0zbUS8gHx9Ff81rIFnAEjdxOW3KC/wCSkZHMSzOwggERv0JA7pXxuNp5HEDbovtmPBhvCbkwIbew37+fBY3xr4eHgvGpGYniRIsLQNLo3a03KzFoVj+m44ddY98FoYetbU2BN9rj0mVhBhaLzrvMxPNHoVjZ7dN+63n6pGdoyfT0sWLiNwTN9Wk+FimmYlr9QDPIco77+a+XZXgTcEET0M5SeOpCNQxR7RniRyk/aPFLbYsd+IYICXstA42mNI79eay6VUixN9/SVpUsUHdn91nO+HBz3OzETfpobd60lJaxQDveII5eQsZQRHf7/lODCjKBpM5uPab6SPNEbg2iYuYb3GCCEuX0lGaxwHKCi06g9932VX4Uho3gGP7hBPOCs+pmaO8+IWZSdFNHEOaQet+6PslG0mmeqV/MGddfup/MWWVLTUBK1Mbc4QmUrSudX0XPr2hMkCkFcq/NUKWgAY+596bJgusSNvUlJUyZyrTwlK7gBbK3xIzBYi7FHfDaZcc0dmCL/5SDHfK0xTaYMaNzR1Lp+qimyGwNSR4wPsmGuDcvHLl8JjuJcul0WgWAwrWhsgjR45S2QD4BGwzWNBEWILmgDfNafDzRDWBF4Ek/wBugHqlzVggmxEt6gQI8j4LWS2A+yq5su2cZ4XBLSB4yi/mczp4zHCw7RHcBHUrIdiyWsYNZIPJzrH1RTWzNPE0y1o4F0eNyO4FTJfAXdiADIkw6Wzp2nGQRvYSShVK7yGHNZoJg8XFoFuZ9DwQnviYkgSwcxJ19O8oDKhLi1xuNY1Drns8pnuKrZBiXfqNwGgARqQcoPSJPsJV1aZmBtaTe2nh5q73nttECRaYgX8rAX5pHMS6Y2EbWgfsO9GwOubn7iBAu2wsOZ71oYOhkgiTmBvfa0DgbztHBCwVGASSQ/skQJB37jERfwWiysAIDna2ggmSLkA7HXj0iVh6ujSQ40nMZtAcdjeLyNJEeqQr4j/qNgWBzciMwP1hWq1YZIsfWx9db8Uoaxc5r2x2hBjQOmDPIunxXRURsYZPbcJnjIgXqOgA6x2SuYYY8hpImm8HfNDAeepJ8EphqoioSZi0aiTDZA31IV6byWxMnO2Ym4lzjfWzh/2rLa+EG61R0dpwkkgwYyhuW3iSO5GbVzzmu0gt6i7YA67cZSNBmZouWwe2f8wEx/3OP+1HfiBNmwOzlA4kDK2Bznx5FWKSKZnxCjrBLgXOg8YN/et1lMfltBifGfUL6Ytk6TLYMwAIMkzwA9YWNiKAvYQe8Rfz1XGaxloKFPnRobaX1iZ0PP6qfnEztIGnEQECrhyDYQLyLwqNqGdJGnGPf0SM9dTNGrgKgbB148Y18votU1QIPM68P3nyXz1J9p8+8lNDFSCJ29J/Yrup0U1jiAQRpb/8x9J8ERuNGYRz7zeFhsxMOcNdb++hCllYan/N4jRZlIlmqaoB7xrtJm/l4Jas0OB5gknn2QPVLfmL33k90BT8yJE7+R/gJkmLEcThC1zo0kRwgz9vNLvY4RbX9lrvqTJ5j7ITqYI02B71HBfCmOHn1Cgvn31Tz6Inv26u99yA+hrwkD1C5uLQFs65E+SVyzT4A58OwoLjPEH6/stPDNDTHCL8hogYcxbf+SFZ1S556dNFu0tDQw55gHgBO237FBdUtIO4+p99EtUrkOM/0mfD7lDbUgNM6kg9GtH3UyTZGx2pWnIeYnbXbzKHVqdsNBuHgjhDib+AA8UHE1j2Tykxxk/X0Q2VCWscbAEi2tiHSfFW7ISHw4RNjOgOkkeYCYoPmY/pOtgJ/U49B5lI03guOwv4QfJMsrdjLsRN+EzLj1HmotwTSrFzuAOk8BBcepy/wqhxzEgXkn/dJHhN0FrpdJIgu1PMk+xzQq7ySTEB14Gutp+y6J6AZNW8WPG/DXoLeCLQMmS4gExJ05TraYSDXm0cp9Y8Vo4V8AX14kDS9xssykVGhRqtILQLZmAG4ubEEePmm2PIA/pMbBv6bgeqSa7tNP6gSD2ZkwQIF9fDRS+sQLi2Z2vCIBjldWGmrK2ExEAkCYjXcGQJnmBPelcS3KyBtlJ4w7/ylCxDybTtvy18vRBdUdLQb5g0dx7Pjv1WpP5RhjkhrTcS5xnqCHeHZB712HaWwSRljPzs1ro6HMf7koX5SQL9kjoDLJ8CPAqzXybm1m9A2Po1ZtlGatYt0JsBPAufObya4JqgJAe6GiJmLg6d8knw5LMbWIEHe7ukBxHfIHciMxIMTpBHUl23ICfFL1BotfBYW27jed3DcdnwS2Jp5nmDBdlgCA2TNwPcKra13E3ADhB22+g8URzWF0C4y+ms8t7kdysoqUdNyoSr4e4DxAOhO1wJSdWmGOMkGDFtDroU8W2JJFjpm0iTYXEWnvS7hmB5Cbx73XnKKZwLi378FBeRDxrv1H3HoVDht7H7LmOIlu48DvHiukXZkO6q0gEDp09+iqX6gHeesgD6pZ7i2W8DZWY4WPGPEG/ojlegD/NiOI9D7Cvnm/u38Jd7/Ij36KodEjb7iR6I2DSZU10gn7qGVL8oSgfFp3UNfp0RyewGM1x796qKgnxHqEFjrSrvffv9FpyVIELlWVytrkDLqkEHnP1+6DUqm/QHxhcuXJ7glxzPdOzXR3A6oLXZjGwIgczDQFK5aYIqWtPDyv6lQ3EZALcdbiDr3/uuXItwAD4HM+m/2RKr4mZOw0gHSQuXJ8BDnxxtseO+iq9x13M8PfFcuTkBKTdXC+UA3809lGSS7WIkTtdcuWJGkcahBkGxuNZDevGIRq9UOAIvYyL2538Vy5dIrYgq/EkGePHrB9SqUqkkcW6dRBHoVy5G/wDIhJF5J1F/78p8vqqh36Sb2JPSYhcuWmgdiKpzOM3JjvIv6FMh8NYBY+k5T9/FcuT6wGa6Wg8Tfo0F30V3NBIBBlwBkEaAyeei5ctlFnPBM3B0i21re9Aq4k5La7jiDbU78O5cuXmluyieIbbr799UN7pFtte/6LlysNmZYJz/AH5LmP17/EgrlyAJsOBHoqMO3L0P2K5cj3Bd7vH9/wCFLHxPf781y5FuC7DAPJc59/fJcuRgrmXLlyA//9k=" alt=""></td>
              <td>{{$u->email}}</td>
                  <td style="text-align: center" ><a href="{{route('user-edit',['id'=> $u->id])}}" class="btn btn-primary " @popper(Chỉnh Sửa)><i class="fa	fa-edit"></i></a>  
                                                  @if (Auth::user()->email==$u->email)
                                                  
                                                  @else
                                                  <a href="{{ route('user-del',['id'=> $u->id]) }}" class="btn btn-danger " @popper(Hủy Quyền) ><i class="fa fa-ban"></i></a>
                                                  @endif</td>
  
            </tr>
              
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
  </div>
  <div  class=" dataTables_pager">
          
    {!! $user->links() !!}
  
  </div>
      <!--end: Datatable-->
    </div>
  </div>

</div>
<!------------------------------------->
<style>

   .search{
   display: flex;
   justify-content: space-between;
   align-items: center;
 }
 .search .form-search{
   width: 40%;
 }
 @media (max-width: 1120px){
   .detail-body .grid{
      display: block;
  }
  .content-detail{
    margin: 50px 0 0 0 !important;
    display: grid;
    grid-template-columns: repeat(2,1fr);
  }
  
  @media (max-width: 570px) {
   .content-detail{
    margin: 30px 0 0 0 !important;
    display: block;
  }
  }
 }
</style>
@endsection
