<style>
            .inputContainer {
          position: relative;
          height: 45px;
          width: 90%;
          margin-bottom: 17px;
        }
        .input {
          position: absolute;
          top: 0px;
          left: 0px;
          height: 100%;
          width: 100%;
          border: 1px solid #767676;
          border-radius: 7px;
          font-size: 16px;
          padding: 0 20px;
          outline: none;
          background: none;
          z-index: 1;
        }
        ::placeholder {
          color: transparent;
        }
        .label {
          position: absolute;
          top: 15px;
          left: 15px;
          padding: 0 4px;
          background-color: white;
          color: #636363;
          font-size: 16px;
          transition: 0.5s;
          z-index: 0;
        }
        .submitBtn {
          display: block;
          margin-left: auto;
          padding: 15px 30px;
          border: none;
          background-color: #3863a3;
          color: white;
          border-radius: 6px;
          cursor: pointer;
          font-size: 16px;
          margin-top: 30px;
        }

        .submitBtn:hover {
          background-color: #3863a3;
          transform: translateY(-2px);
        }
        .input:focus + .label {
          top: -7px;
          left: 3px;
          z-index: 10;
          font-size: 14px;
          font-weight: 600;
          color: #3863a3;
        }
</style>

            <div class="inputContainer">
                <input type="text" class="input" placeholder="a">
                <label for="" class="label">@yield('name')</label>
              </div>